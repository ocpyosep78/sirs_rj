<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_m_fisik extends MX_Controller {

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}

	function modal_kesan_umum_()
	{
		$data['title']      = 'Kesan Umum';
		$data['form_open']  = form_open(base_url().'sistem/add_fisik_kesan_umum', array('id' => 'content-data-fisik'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_ku','',true);
		
		$this->load->view('modal',$data);
	}

	function modal_kesan_umum_edit_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Kesan Umum';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_kesan_umum', array('id' => 'content-data-fisik'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_ku_edit', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_kepala_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Kepala';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_kepala', array('id' => 'kepala'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_kepala', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_leher_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Leher';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_leher', array('id' => 'leher'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_leher', $query, true);
		
		$this->load->view('modal',$data);
		}

	function modal_mammae_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Mammae';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_mammae', array('id' => 'mammae'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_mammae', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_thoraks_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Thoraks';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_thoraks', array('id' => 'thoraks'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_thoraks', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_paru_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Paru';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_paru', array('id' => 'paru'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_paru', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_jantung_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Jantung';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_jantung', array('id' => 'jantung'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_jantung', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_abdomen_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Abdomen';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_abdomen', array('id' => 'abdomen'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_abdomen', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_genitalia_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Genitalia';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_genitalia', array('id' => 'genitalia'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_genitalia', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_ektremitas_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Ektremitas';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_ektremitas', array('id' => 'ektrimitas'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_ektremitas', $query, true);
		
		$this->load->view('modal',$data);
	}

	function modal_neurologis_()
	{
		$no_medrec          = $this->input->post('nomed');
		$tanggal            = $this->input->post('tgl');
		$id_poli            = $this->input->post('idpol');
		$query['query']     = $this->pasien->pasien->pasien_get_fisik($no_medrec, $tanggal, $id_poli);
		$data['title']      = 'Data Pemeriksaan Neurologis';
		$data['form_open']  = form_open(base_url().'sistem/edit_fisik_neorologis', array('id' => 'neurologis'));
		$data['form_close'] = form_close();
		$data['body']       = $this->load->view('modal/modal_fisik_neurologis', $query, true);
		
		$this->load->view('modal',$data);
	}
}

/* End of file a_m_fisik.php */
/* Location: ./application/modules/ajax_request/controllers/modal/a_m_fisik.php */