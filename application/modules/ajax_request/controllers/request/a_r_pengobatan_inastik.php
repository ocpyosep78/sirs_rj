<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_pengobatan_inastik extends MX_Controller {

	var $no_medrec;
	var $tanggal;
	var $id_poli; 

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function _get_pengobatan_insatik($type='json', $no_medrec = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_pengobatan_inastik($no_medrec, $tanggal, $id_poli);
		
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function pengobatan_inastik_tb_()
	{
		$query['query'] = $this->_get_pengobatan_insatik('query');
		$query['print'] = print_button('report_obat/'.$this->no_medrec.'/'.$this->tanggal.'/'.$this->id_poli);
		$query['link']  = 'nomed='.$this->no_medrec.'&tgl='.$this->tanggal.'&idpol='.$this->id_poli;
		echo $this->load->view('request/request_pengobatan_inastk', $query);
	}

}

/* End of file a_r_pengobatan_inastik.php */
/* Location: ./application/modules/ajax_request/controllers/a_r_pengobatan_inastik.php */