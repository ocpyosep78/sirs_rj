<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_fisik extends MX_Controller {

	var $no_medrec;
	var $tanggal;
	var $id_poli; 

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function _get_fisik($type='json', $no_medrec = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function fisik_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = print_button('');
		$query['link']  = $this->no_medrec.'/'.$this->tanggal.'/'.$this->id_poli;
		echo $this->load->view('request/request_fisik', $query);
	}

	function fisik_neorologis_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/neurologis', $query);
	}

	function fisik_ektremitas_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/ektremitas', $query);
	}

	function fisik_genitalia_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/genitalia', $query);
	}

	function fisik_abdomen_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/abdomen', $query);
	}

	function fisik_paru_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/paru', $query);
	}

	function fisik_thoraks_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/thoraks', $query);
	}

	function fisik_mammae_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/mammae', $query);
	}

	function fisik_leher_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/leher', $query);
	}

	function fisik_kepala_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/kepala', $query);
	}

	function fisik_jantung_tb_()
	{
		$query['query'] = $this->_get_fisik('query');
		$query['print'] = '';
		$query['link'] = '';
		echo $this->load->view('fisik_request/jantung', $query);
	}
}