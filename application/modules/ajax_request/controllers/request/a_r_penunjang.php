<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_penunjang extends MX_Controller {

	var $no_medrec;
	var $tanggal;
	var $id_poli; 

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function _get_penunjang($type='json', $no_medrec = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_penunjang($no_medrec, $tanggal, $id_poli);

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function penunjang_tb_()
	{
		$query['query'] = $this->_get_penunjang('query');
		$query['print'] = print_button('');
		$query['link']  = 'nomed='.$this->no_medrec.'&tgl='.$this->tanggal.'&idpol='.$this->id_poli;
		echo $this->load->view('request/request_penunjang', $query);
	}

	function get_penunjang_content()
	{
		$string           = '';
		$isi              = $this->input->get('content');
		$no_medrec        = $this->input->get('nomed');
		$tgl              = $this->input->get('tgl');
		$idpoli           = $this->input->get('idpol');
		$content          = $this->pasien->pasien_get_penunjang_content($isi);
		$selected_content = $this->pasien->pasien_get_penunjang($no_medrec,$tgl,$idpoli);
		
		$data = array(
				'content'          => $content,
				'selected_content' => $selected_content,
			);
		echo $this->load->view('request/request_penunjang_content',$data);
	}
}

/* End of file a_r_penunjang.php */
/* Location: ./application/modules/ajax_request/controllers/request/a_r_penunjang.php */