<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_pelayanan_poli extends MX_Controller {

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function _get_pel_pol($type='json', $no_medrec = '')
	{
		$no_medrec = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$tanggal = $this->input->post('tgl');
		$id_poli = $this->input->post('idpol');

		$data['result'] = $this->pasien->pasien_get_pelayanan_poli($no_medrec, $tanggal, $id_poli);

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function pelayanan_poli_tb_()
	{
		$open_table = '<td>';
		$close_table = '</td>';

		$query = $this->_get_pel_pol('query');

		$content = '<div class="table-responsive">';
		$content .= '<table class="table table-bordered table-striped table-hover">';
		$content .= '<thead>';
		$content .= '<tr>';
		$content .= '<th>NAMA LAYANAN</th>';
		$content .= '<th>KELAS / POLI</th>';
		$content .= '<th>NAMA DOKTER</th>';
		$content .= '</tr>';
		$content .= '</thead>';
		$content .= '<tbody>';
		$content .= '<tr>';


		if(count($query['result']) > 0){
			foreach($query['result'] as $rq)
			{
				$content .= $open_table;
				$content .= '<strong><small>'.$rq['ID_JNS_LAYANAN'].'</small><br>'.$rq['NM_LAYANAN'].'</strong>';
				$content .= $close_table;

				$content .= $open_table;
				$content .= '<strong><small>'.$rq['KELAS'].'</small></strong><br>POLI : '.$rq['NM_POLI'];
				$content .= $close_table;

				$content .= $open_table;
				$content .= '<strong><small>'.$rq['DRPOLI'].'</small><br>'.$rq['NM_DOKTER'].'</strong>';
				$content .= $close_table;
				$content .= '</tr>';
			}
		}else{
			$content .= '<td class="empty-row" colspan="9">';
			$content .= preset_message('unavailable_data');
			$content .= $close_table;
			$content .= '</tr>';
		}

		$content .= '</tbody>';
		$content .= '</table>';
		$content .= '</div>';

		echo $content;
	}
}

/* End of file a_r_pelayanan_poli.php */
/* Location: ./application/modules/ajax_request/controllers/a_r_pelayanan_poli.php */