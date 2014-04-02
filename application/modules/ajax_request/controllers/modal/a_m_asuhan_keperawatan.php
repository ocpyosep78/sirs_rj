<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_asuhan_keperawatan extends MX_Controller {

	var $referer_ = '#content-data-anamnesis';

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_asuhan_keperawatan_()
	{
		$data['title']      = 'Tambah Psikososial &<br> Kebutuhan Komunikasi / Pendidikan Dan Pengajaran';
		$data['form_open']  = form_open(base_url().'sistem/add_asuhan_keperawatan', array('id' => 'content-data-asuhan_keperawatan'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_asuhan_keperawatan','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_asuhan_keperawatan_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_asuhan_keperawatan($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Psikososial &<br> Kebutuhan Komunikasi / Pendidikan Dan Pengajaran';
		$data['form_open']  = form_open(base_url().'sistem/edit_asuhan_keperawatan', array('id' => 'content-data-diagnosa'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_asuhan_keperawatan_edit', $query,true);
		
		$this->load->view('modal',$data);
	}

	function modal_disposisi_asuhan_keperawatan_()
	{
		$data['title']      = 'Tambah Disposisi';
		$data['form_open']  = form_open(base_url().'sistem/add_diposisi', array('id' => 'content-data-diposisi'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_asuhan_keperawatan_disposisi','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_disposisi_asuhan_keperawatan_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_diposisi($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Edit Disposisi';
		$data['form_open']  = form_open(base_url().'sistem/edit_diposisi', array('id' => 'content-data-diagnosa'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_asuhan_keperawatan_disposisi_edit', $query,true);
		
		$this->load->view('modal',$data);
	}

}

/* End of file a_m_asuhan_keperawatan.php */
/* Location: ./application/modules/ajax_request/controllers/modal/a_m_asuhan_keperawatan.php */