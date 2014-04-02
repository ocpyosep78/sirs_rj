<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_biodata extends MX_Controller {

	var $no_medrec;

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
		$this->load->model('addon_model','addon');
	}

	function _get_bio($type='json', $no_medrec = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$this->no_medrec = $no_medrec;
		$data['result']  = $this->pasien->pasien_get_biodata($no_medrec);
		
		if(count($data['result']) > 0){
			$this->session->set_userdata('no_medrec', $no_medrec);
			$this->session->set_userdata('jk', $data['result'][0]['SEX']);
		}

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function bio_tb_()
	{
		$query['query'] = $this->_get_bio('query');
		$query['print'] = print_button('report_biodata/'.$this->no_medrec);
		echo $this->load->view('request/request_biodata', $query);
	}
}