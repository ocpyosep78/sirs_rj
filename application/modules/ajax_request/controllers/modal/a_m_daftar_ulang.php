<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_daftar_ulang extends MX_Controller {

	var $referer_ = '#content-data-kunjungan';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_daftar_ulang_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien_get_daftar_ulang($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Daftar Ulang';
		$data['form_open']  = form_open(base_url().'sistem/edit_daftar_ulang', array('id' => 'content-daftar-ulang'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_daftar_ulang',$query,true);
		
		$this->load->view('modal',$data);
	}
}