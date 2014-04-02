<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_diagnosa extends MX_Controller {

	var $referer_ = '#content-data-diagnosis';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_diagnosa_()
	{
		$data['title']      = 'Diagnosa Pasien';
		$data['form_open']  = form_open(base_url().'sistem/add_diagnosa', array('id' => 'content-data-diagnosa'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_diagnosa','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_diagnosa_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$diagnosa           = $this->input->post('DIAGNOSA');
		$query['query']     = $this->pasien->pasien->pasien_get_diagnosa($no_medrec, $tanggal, $id_poli, $diagnosa);
		$data['title']      = 'Edit Diagnosa Pasien';
		$data['form_open']  = form_open(base_url().'sistem/edit_diagnosa', array('id' => 'content-data-diagnosa'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_diagnosa_edit', $query,true);
		
		$this->load->view('modal',$data);
	}

}

/* End of file a_m_diagnosa.php */
/* Location: ./application/modules/ajax_request/controllers/modal/a_m_diagnosa.php */