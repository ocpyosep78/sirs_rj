<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_prosedur extends MX_Controller {

	var $referer_ = '#content-data-prosedur';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_prosedur_()
	{	
		$data['title']      = 'Tambah Prosedur Tindakan';
		$data['form_open']  = form_open(base_url().'sistem/add_prosedur_tindakan', array('id' => 'content-data-prosedur'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_prosedur','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_prosedur_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$id                 = $this->input->post('ID');
		$query['query']     = $this->pasien->pasien->pasien_get_prosedur($no_medrec, $tanggal, $id_poli, $id);
		$data['title']      = 'Edit Prosedur Tindakan';
		$data['form_open']  = form_open(base_url().'sistem/edit_prosedur_tindakan', array('id' => 'content-data-prosedur'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_prosedur_edit',$query,true);
		
		$this->load->view('modal',$data);
	}

}

/* End of file a_m_prosedur.php */
/* Location: ./application/modules/ajax_request/controllers/a_m_prosedur.php */