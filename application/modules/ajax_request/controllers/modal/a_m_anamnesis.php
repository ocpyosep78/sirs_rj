<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_anamnesis extends MX_Controller {

	var $referer_ = '#content-data-anamnesis';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_anam_()
	{
		$data['title']      = 'Tambah Catatan Anamnesis';
		$data['form_open']  = form_open(base_url().'sistem/add_anamnesis', array('id' => 'content-anamnesis'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_anamnesis','',true);

		$this->load->view('modal',$data);
	}

	function modal_anam_edit_()
	{		
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien_get_anamnesa($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Catatan Anamnesis';
		$data['form_open']  = form_open(base_url().'sistem/edit_anamnesis', array('id' => 'content-anamnesis'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_anamnesis_edit',$query,true);

		$this->load->view('modal',$data);
	}
}

/* End of file ajax_modal_anamnesis.php */
/* Location: ./application/modules/ajax_request/controllers/ajax_modal_anamnesis.php */