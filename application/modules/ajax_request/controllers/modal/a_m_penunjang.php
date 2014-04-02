<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_penunjang extends MX_Controller {

	var $referer_ = '#content-data-penunjang';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_penunjang_()
	{	
		$data['title']      = 'Tambah Transaksi Penunjang';
		$data['form_open']  = form_open(base_url().'sistem/add_penunjang', array('id' => 'content-data-penunjang'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_penunjang','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_penunjang_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$id                 = $this->input->post('ID');
		$query['query']     = $this->pasien->pasien->pasien_get_penunjang($no_medrec, $tanggal, $id_poli, $id);
		$data['title']      = 'Edit Transaksi Penunjang';
		$data['form_open']  = form_open(base_url().'sistem/edit_penunjang', array('id' => 'content-data-penunjang'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_penunjang_edit',$query,true);
		
		$this->load->view('modal',$data);
	}


}

/* End of file a_m_penunjang.php */
/* Location: ./application/modules/ajax_request/controllers/modal/a_m_penunjang.php */