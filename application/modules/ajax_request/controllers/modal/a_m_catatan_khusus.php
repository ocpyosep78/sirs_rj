<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_catatan_khusus extends MX_Controller {

	var $referer_ = '#content-data-khusus';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_cat_()
	{
		$data['title']      = 'Tambah Catatan Khusus';
		$data['form_open']  = form_open(base_url().'sistem/add_catatan_khusus', array('id' => 'content-data-khusus'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_catatan_khusus','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_cat_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien_get_khusus($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Catatan Khusus';
		$data['form_open']  = form_open(base_url().'sistem/edit_catatan_khusus', array('id' => 'content-data-khusus'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_catatan_khusus_edit',$query,true);
		
		$this->load->view('modal',$data);
	}
}

/* End of file catatan_khusus.php */
/* Location: ./application/modules/ajax_request/controllers/catatan_khusus.php */