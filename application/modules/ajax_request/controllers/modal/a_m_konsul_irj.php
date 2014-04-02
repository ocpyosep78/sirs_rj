<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_konsul_irj extends MX_Controller {

	var $referer_ = '#content-data-konsul';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_permohonan_konsul_()
	{		
		$data['title']      = 'Permohonan Konsul Rawat Jalan';
		$data['form_open']  = form_open(base_url().'sistem/add_permohonan_konsul', array('id' => 'content-data-konsul'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_konsul_permohonan','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_jawaban_konsul_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien_get_konsul($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Jawaban Konsul Rawat Jalan';
		$data['form_open']  = form_open(base_url().'sistem/add_jawaban_konsul', array('id' => 'content-data-konsul'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_konsul_jawaban',$query,true);
		
		$this->load->view('modal',$data);
	}

	function modal_edit_permohonan_konsul_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien_get_konsul($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Permohonan Konsul Rawat Jalan';
		$data['form_open']  = form_open(base_url().'sistem/edit_permohonan_konsul', array('id' => 'content-data-konsul'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_konsul_permohonan_edit',$query,true);
		
		$this->load->view('modal',$data);
	}
}