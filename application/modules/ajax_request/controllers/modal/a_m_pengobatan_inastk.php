<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_pengobatan_inastk extends MX_Controller {

	var $referer_ = '#content-data-obat';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_pengobatan_inastk_()
	{
		$no_medrec             = $this->input->post('nomed');
		$tanggal               = $this->input->post('tgl');
		$id_poli               = $this->input->post('idpol');
		$query                 = $this->pasien->pasien_get_daftar_ulang($no_medrec, $tanggal, $id_poli);
		$cara_bayar            = (count($query) > 0) ? $query[0]['CARA_BAYAR'] : '';
		$request['cara_bayar'] = $cara_bayar;
		$data['title']         = 'Tambah Permintaan Obat';
		$data['form_open']     = form_open(base_url().'sistem/add_pengobatan_inastk', array('id' => 'content-data-obat'));
		$data['form_close']    = form_close();
		$data['body']          = $this->load->view('modal/modal_pengobatan_inastk', $request ,true);

		$this->load->view('modal',$data);
	}

	function modal_pengobatan_inastk_edit_()
	{
		$no_medrec             = $this->input->post('nomed');
		$tanggal               = $this->input->post('tgl');
		$id_poli               = $this->input->post('idpol');
		$id_inastk             = $this->input->post('ID_INASTK');
		$query                 = $this->pasien->pasien_get_daftar_ulang($no_medrec, $tanggal, $id_poli);
		$cara_bayar            = (count($query) > 0) ? $query[0]['CARA_BAYAR'] : '';
		$request['cara_bayar'] = $cara_bayar;
		$request['query']      = $this->pasien->pasien_get_pengobatan_inastik($no_medrec, $tanggal, $id_poli, $id_inastk);
		$data['title']         = 'Edit Permintaan Obat';
		$data['form_open']     = form_open(base_url().'sistem/edit_pengobatan_inastk', array('id' => 'content-data-obat'));
		$data['form_close']    = form_close();
		$data['body']          = $this->load->view('modal/modal_pengobatan_inastk_edit', $request ,true);
		
		$this->load->view('modal',$data);
	}

}