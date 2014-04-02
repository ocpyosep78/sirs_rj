<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistem extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		modules::run('login/is_logged_in');

		$this->load->model('pasien_model','pasien');
		$this->load->model('membership_model','membership');
		$this->load->model('addon_model','addon');
	}

/*
|------------------------------------------------------------------- 
| Bagian inti sistem 
|-------------------------------------------------------------------
|
| Bagian ini adalah inti pembentukan url pertama dari sistem,
| bagian utama yang dieksekusi ketika touchdown page ini adalah
| dashboard.html.
|
*/

	public function index()
	{
		redirect(base_url().'sistem/dashboard.html');
	}

	public function dashboard()
	{
		$data['title'] = 'Index';
		$this->load->view('template_main', $data);
	}
	

/*
|------------------------------------------------------------------- 
| Bagian Proses 
|-------------------------------------------------------------------
|
| Bagian ini adalah bagian eksekusi dari ajax yang dilakukan pada
| proses yang dilakukan. dengan data kembalian defaultnya adalah
| AJAX header
|
*/

/*
|------------------------------------------------------------------- 
| Bagian Catatan Khusus
|-------------------------------------------------------------------
*/
	function add_catatan_khusus()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');

		$catatan                 = $this->input->post('catatan');

		$referer_                = $this->input->post('referer_');
		$query                   = $this->pasien->pasien_tambah_khusus($no_medrec, $tanggal_kunjungan, $id_poli, $catatan);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'khusus_tb_';
		
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_catatan_khusus()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');

		$catatan                 = $this->input->post('catatan');

		$referer_                = $this->input->post('referer_');
		$query                   = $this->pasien->pasien_edit_khusus($no_medrec, $tanggal_kunjungan, $id_poli, $catatan);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'khusus_tb_';
		
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian anamnesis
|-------------------------------------------------------------------
*/
	function add_anamnesis()
	{
		$no_medrec                 = $this->input->post('nomed');
		$id_poli                   = $this->input->post('idpol');
		$tanggal_kunjungan         = $this->input->post('tgl');

		$sumber                    = $this->input->post('SUMBER');
		$keluhan_utama             = $this->input->post('KELUHAN_UTAMA');
		$pasien_illnes             = $this->input->post('PASIEN_ILLNES');
		$anamnesa                  = $this->input->post('ANAMNESA');
		$riwayat_penyakit          = $this->input->post('RIWAYAT_PENYAKIT');
		$riwayat_penyakit_keluarga = $this->input->post('RIWAYAT_PENYAKIT_KELUARGA');

		$referer_                  = $this->input->post('referer_');
		$query                     = $this->pasien->pasien_tambah_anamnesa($no_medrec, $tanggal_kunjungan, $id_poli, $sumber, $keluhan_utama, $pasien_illnes, $anamnesa, $riwayat_penyakit, $riwayat_penyakit_keluarga);
		$hasil['response']         = ($query) ? 1 : 0;
		$hasil['referer_']         = $referer_;
		$hasil['parent_control']   = 'anam_tb_';
		
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_anamnesis()
	{
		$no_medrec                 = $this->input->post('nomed');
		$id_poli                   = $this->input->post('idpol');
		$tanggal_kunjungan         = $this->input->post('tgl');

		$sumber                    = $this->input->post('SUMBER');
		$keluhan_utama             = $this->input->post('KELUHAN_UTAMA');
		$pasien_illnes             = $this->input->post('PASIEN_ILLNES');
		$anamnesa                  = $this->input->post('ANAMNESA');
		$riwayat_penyakit          = $this->input->post('RIWAYAT_PENYAKIT');
		$riwayat_penyakit_keluarga = $this->input->post('RIWAYAT_PENYAKIT_KELUARGA');

		$referer_                  = $this->input->post('referer_');
		$query                     = $this->pasien->pasien_edit_anamnesa($no_medrec, $tanggal_kunjungan, $id_poli, $sumber, $keluhan_utama, $pasien_illnes, $anamnesa, $riwayat_penyakit, $riwayat_penyakit_keluarga);
		$hasil['response']         = ($query) ? 1 : 0;
		$hasil['referer_']         = $referer_;
		$hasil['parent_control']   = 'anam_tb_';
		
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian Tindakan / prosedur
|-------------------------------------------------------------------
*/
	function add_prosedur_tindakan()
	{
		$no_medrec         = $this->input->post('nomed');
		$id_poli           = $this->input->post('idpol');
		$tanggal_kunjungan = $this->input->post('tgl');
		
		$cek_prosedur      = $this->pasien->pasien_get_prosedur($no_medrec, $tanggal_kunjungan, $id_poli);
		
		if(count($cek_prosedur) >= $this->config->item('count_prosedur')){
			$query = false;
		}else{
			$cek_utama         = $this->pasien->pasien_cek_prosedur_utama($no_medrec, $tanggal_kunjungan, $id_poli);
			$klasifikasi       = (count($cek_utama) == 0) ? 'UTAMA' : 'TAMBAHAN';
			$klasifikasi       = (count($cek_prosedur) == 0) ? 'UTAMA' : $klasifikasi;
			//$klasifikasi     = $this->input->post('KLASIFIKASI');
			
			$id_tindakan_array = explode('-',$this->input->post('ID_TINDAKAN'));
			$id                = (is_array($id_tindakan_array)) ? $id_tindakan_array[0] : 0;
			$id_tindakan       = (is_array($id_tindakan_array)) ? $id_tindakan_array[1] : 0;
			$query             = $this->pasien->pasien_tambah_prosedur($no_medrec, $tanggal_kunjungan, $id_poli, $id_tindakan, $klasifikasi, $id);
		}

		$referer_                = $this->input->post('referer_');
		
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'prosedur_tb_';

		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_prosedur_tindakan()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$id_tindakan_array       = explode('-',$this->input->post('ID_TINDAKAN'));
			$id                  = (is_array($id_tindakan_array)) ? $id_tindakan_array[0] : 0;
			$id_tindakan         = (is_array($id_tindakan_array)) ? $id_tindakan_array[1] : 0;
		
		$klasifikasi             = $this->input->post('KLASIFIKASI');
		$referer_                = $this->input->post('referer_');
		$id_lama                 = $this->input->post('ID');
		$query                   = $this->pasien->pasien_edit_prosedur($no_medrec, $tanggal_kunjungan, $id_poli, $id_tindakan, $klasifikasi, $id, $id_lama);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'prosedur_tb_';

		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function delete_prosedur_tindakan()
	{
		modules::run('login/is_locked');

		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$id                      = $this->input->post('ID');
		
		$query                   = $this->pasien->pasien_delete_prosedur($no_medrec, $tanggal_kunjungan, $id_poli, $id);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = '#content-data-prosedur';
		$hasil['parent_control'] = 'prosedur_tb_';

		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian permohonan konsul
|-------------------------------------------------------------------
*/
	function add_permohonan_konsul()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');		
		$id_poli2                = $this->input->post('ID_POLI');
		$problem_konsul          = $this->input->post('PROBLEM_KONSUL');
		$diagnosa                = $this->input->post('DIAGNOSA');
		$isi_konsul              = $this->input->post('ISI_KONSUL');
		$catatan_khusus          = $this->input->post('CATATAN_KHUSUS');
		$referer_                = $this->input->post('referer_');
		$id_konsul               = $this->addon->addon_sequal_konsul_irj();
		$id_konsul               = $id_konsul[0]['NEXTVAL'];

		$query                   = $this->pasien->pasien_tambah_permohonan_konsul($no_medrec, $tanggal_kunjungan, $id_poli, $id_konsul, $id_poli2, $problem_konsul, $diagnosa, $isi_konsul, $catatan_khusus);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'konsul_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_permohonan_konsul()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$id_poli2                = $this->input->post('ID_POLI');
		$problem_konsul          = $this->input->post('PROBLEM_KONSUL');
		$diagnosa                = $this->input->post('DIAGNOSA');
		$isi_konsul              = $this->input->post('ISI_KONSUL');
		$catatan_khusus          = $this->input->post('CATATAN_KHUSUS');
		$id_konsul               = $this->input->post('ID_KONSUL');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_edit_permohonan_konsul($no_medrec, $tanggal_kunjungan, $id_poli, $id_konsul, $id_poli2, $problem_konsul, $diagnosa, $isi_konsul, $catatan_khusus);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'konsul_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function add_jawaban_konsul()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');

		$jawaban                 = $this->input->post('JAWABAN');
		$id_konsul               = $this->input->post('ID_KONSUL');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_tambah_jawaban_konsul($no_medrec, $tanggal_kunjungan, $id_poli, $jawaban, $id_konsul);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'konsul_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian daftar ulang
|-------------------------------------------------------------------
*/
	function edit_daftar_ulang()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$jens_kunj               = $this->input->post('JNS_KUNJ');
		$id_dokter               = $this->input->post('ID_DOKTER');
		$prekondisi              = $this->input->post('PREKONDISI');
		$id_drg                  = $this->input->post('ID_DRG');
		$tindak_lanjut           = $this->input->post('TINDAK_LANJUT');
		$id_poli2                = $this->input->post('ID_POLI2');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_edit_daftar_ulang($no_medrec, $tanggal_kunjungan, $id_poli, $jens_kunj, $id_dokter, $prekondisi, $id_drg, $tindak_lanjut, $id_poli2);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'daful_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian diagnosa
|-------------------------------------------------------------------
*/
	function add_diagnosa()
	{
		$no_medrec         = $this->input->post('nomed');
		$id_poli           = $this->input->post('idpol');
		$tanggal_kunjungan = $this->input->post('tgl');
		
		$diagnosa          = $this->input->post('ID_DIAGNOSA');
		
		$cek_diagnosa      = $this->pasien->pasien_get_diagnosa($no_medrec, $tanggal_kunjungan, $id_poli);
		if(count($cek_diagnosa) >= $this->config->item('count_diagnosa')){
			$query = false;
		}else{
			$cek_utama   = $this->pasien->check_data_diagnosa_utama($no_medrec, $tanggal_kunjungan, $id_poli);
			$klasifikasi = (count($cek_utama) == 0) ? 'UTAMA' : 'TAMBAHAN';
			$klasifikasi = (count($cek_diagnosa) == 0) ? 'UTAMA' : $klasifikasi;
			$query       = $this->pasien->pasien_add_diagnosa($no_medrec, $tanggal_kunjungan, $id_poli, $diagnosa, $klasifikasi);
		}

		$referer_                = $this->input->post('referer_');
		
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'diagnosa_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_diagnosa()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$diagnosa                = $this->input->post('ID_DIAGNOSA');
		$klasifikasi             = $this->input->post('KLASIFIKASI');
		
		$diagnosa_lama           = $this->input->post('DIAGNOSA_LAMA');
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_edit_diagnosa($no_medrec, $tanggal_kunjungan, $id_poli, $diagnosa, $klasifikasi, $diagnosa_lama);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'diagnosa_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function delete_diagnosa()
	{
		modules::run('login/is_locked');

		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$diagnosa                = $this->input->post('DIAGNOSA');
		
		$query                   = $this->pasien->pasien_delete_diagnosa($no_medrec, $tanggal_kunjungan, $id_poli, $diagnosa);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = '#content-data-diagnosis';
		$hasil['parent_control'] = 'diagnosa_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian pengobatan inastk
|-------------------------------------------------------------------
*/
	function add_pengobatan_inastk()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$id_inastk               = $this->input->post('ID_OBAT');
		$jmlobat                 = $this->input->post('JMLOBAT');
		$bentuk                  = $this->input->post('SATUAN');
		$sediaan                 = $this->input->post('KADAR');
		$signa1                  = $this->input->post('SIGNA1');
		$signa2                  = $this->input->post('SIGNA2');
		$signa3                  = $this->input->post('SIGNA3');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_add_pengobatan_inastk($no_medrec, $tanggal_kunjungan, $id_poli, $id_inastk, $jmlobat, $signa1, $signa2, $signa3, $bentuk, $sediaan);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'pengobatan_inastik_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_pengobatan_inastk()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$id_inastk               = $this->input->post('ID_OBAT');
		$jmlobat                 = $this->input->post('JMLOBAT');
		$bentuk                  = $this->input->post('SATUAN');
		$sediaan                 = $this->input->post('KADAR');
		$signa1                  = $this->input->post('SIGNA1');
		$signa2                  = $this->input->post('SIGNA2');
		$signa3                  = $this->input->post('SIGNA3');
		
		$id_inastk_lama          = $this->input->post('ID_INASTK');
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_edit_pengobatan_inastk($no_medrec, $tanggal_kunjungan, $id_poli, $id_inastk, $jmlobat, $signa1, $signa2, $signa3, $bentuk, $sediaan, $id_inastk_lama);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'pengobatan_inastik_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function delete_pengobatan_inastk()
	{
		modules::run('login/is_locked');

		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$id_inastk               = $this->input->post('ID_INASTK');
		
		$query                   = $this->pasien->pasien_delete_pengobatan_inastk($no_medrec, $tanggal_kunjungan, $id_poli, $id_inastk);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = '#content-data-obat';
		$hasil['parent_control'] = 'pengobatan_inastik_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian Fisik
|-------------------------------------------------------------------
*/

/*-- fisik kesan umum --*/

	function add_fisik_kesan_umum()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$ku                      = $this->input->post('KU');
		$kesadaran               = $this->input->post('KESADARAN');
		$gizi                    = $this->input->post('GIZI');
		$tinggi                  = $this->input->post('TINGGI');
		$berat                   = $this->input->post('BERAT');
		$suhu                    = $this->input->post('SUHU');
		$lingkarkepala           = $this->input->post('LINGKAR_KEPALA');
		$nadi                    = $this->input->post('NADI');
		$pernapasan              = $this->input->post('PERNAPASAN');
		$tekdar_sis              = $this->input->post('TEKDAR_SIS');
		$tekdar_dias             = $this->input->post('TEKDAR_DIAS');
		$vas                     = $this->input->post('VAS');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_add_fisik_kesan_umum($no_medrec, $tanggal_kunjungan, $id_poli, $ku, $kesadaran, $gizi, $tekdar_sis, $tekdar_dias, $nadi, $tinggi, $berat, $lingkarkepala, $pernapasan, $suhu, $vas);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_fisik_kesan_umum()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		$ku                      = $this->input->post('KU');
		$kesadaran               = $this->input->post('KESADARAN');
		$gizi                    = $this->input->post('GIZI');
		$tinggi                  = $this->input->post('TINGGI');
		$berat                   = $this->input->post('BERAT');
		$suhu                    = $this->input->post('SUHU');
		$lingkarkepala           = $this->input->post('LINGKAR_KEPALA');
		$nadi                    = $this->input->post('NADI');
		$pernapasan              = $this->input->post('PERNAPASAN');
		$tekdar_sis              = $this->input->post('TEKDAR_SIS');
		$tekdar_dias             = $this->input->post('TEKDAR_DIAS');
		$vas                     = $this->input->post('VAS');
		
		$referer_                = $this->input->post('referer_');
		
		$query                   = $this->pasien->pasien_edit_fisik_kesan_umum($no_medrec, $tanggal_kunjungan, $id_poli, $ku, $kesadaran, $gizi, $tekdar_sis, $tekdar_dias, $nadi, $tinggi, $berat, $lingkarkepala, $pernapasan, $suhu, $vas);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik kepala --*/

	function edit_fisik_kepala()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$bibir                   = $this->input->post('BIBIR');
		$bibir_ket               = $this->input->post('BIBIR_KET');
		$hidung_concha           = $this->input->post('HIDUNG_CONCHA');
		$hidung_ket              = $this->input->post('HIDUNG_KET');
		$hidung_pch              = $this->input->post('HIDUNG_PCH');
		$hidung_sekret           = $this->input->post('HIDUNG_SEKRET');
		$hidung_septumdeviasi    = $this->input->post('HIDUNG_SEPTUMDEVIASI');
		$kepala                  = $this->input->post('KEPALA');
		$kepala_ket              = $this->input->post('KEPALA_KET');
		$lidah                   = $this->input->post('LIDAH');
		$lidah_ket               = $this->input->post('LIDAH_KET');
		$mata_ket                = $this->input->post('MATA_KET');
		$mata_konjungtiva        = $this->input->post('MATA_KONJUNGTIVA');
		$mata_sklera             = $this->input->post('MATA_SKLERA');
		$membrantympani_intak    = $this->input->post('MEMBRANTYMPANI_INTAK');
		$telinga_cae             = $this->input->post('TELINGA_CAE');
		$telinga_ket             = $this->input->post('TELINGA_KET');
		$telinga_pendengaran     = $this->input->post('TELINGA_PENDENGARAN');
		$telinga_sekret          = $this->input->post('TELINGA_SEKRET');
		$tenggorokan_faring      = $this->input->post('TENGGOROKAN_FARING');
		$tenggorokan_ket         = $this->input->post('TENGGOROKAN_KET');
		$tenggorokan_tonsil      = $this->input->post('TENGGOROKAN_TONSIL');
		$tonsil_membesar         = $this->input->post('TONSIL_MEMBESAR');
		
		$query                   = $this->pasien->pasien_edit_fisik_kepala($no_medrec, $tanggal_kunjungan, $id_poli, $bibir ,$bibir_ket ,$hidung_concha ,$hidung_ket ,$hidung_pch ,$hidung_sekret ,$hidung_septumdeviasi ,$kepala ,$kepala_ket ,$lidah ,$lidah_ket ,$mata_ket ,$mata_konjungtiva ,$mata_sklera ,$membrantympani_intak ,$telinga_cae ,$telinga_ket ,$telinga_pendengaran ,$telinga_sekret ,$tenggorokan_faring ,$tenggorokan_ket ,$tenggorokan_tonsil ,$tonsil_membesar);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_kepala_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik leher --*/

	function edit_fisik_leher()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$leher_ket               = $this->input->post('LEHER_KET');
		$lhr_jvp                 = $this->input->post('LHR_JVP');
		$lhr_jvp_ukuran          = $this->input->post('LHR_JVP_UKURAN');
		$lhr_kel_tiroid          = $this->input->post('LHR_KEL_TIROID');
		$lhr_kgb                 = $this->input->post('LHR_KGB');
		$lhr_kgb_banyak          = $this->input->post('LHR_KGB_BANYAK');
		$lhr_kgb_kltmrh          = $this->input->post('LHR_KGB_KLTMRH');
		$lhr_kgb_kons            = $this->input->post('LHR_KGB_KONS');
		$lhr_kgb_lokasi          = $this->input->post('LHR_KGB_LOKASI');
		$lhr_kgb_mobille         = $this->input->post('LHR_KGB_MOBILLE');
		$lhr_kgb_nyeritekan      = $this->input->post('LHR_KGB_NYERITEKAN');
		$lhr_kgb_ukuran          = $this->input->post('LHR_KGB_UKURAN');
		$lhr_tiroid              = $this->input->post('LHR_TIROID');
		$lhr_tiroid_brui         = $this->input->post('LHR_TIROID_BRUI');
		$lhr_tiroid_kons         = $this->input->post('LHR_TIROID_KONS');
		$lhr_trachea             = $this->input->post('LHR_TRACHEA');
		$lhr_trachea_dev         = $this->input->post('LHR_TRACHEA_DEV');
		
		$query                   = $this->pasien->pasien_edit_fisik_leher($no_medrec, $tanggal_kunjungan, $id_poli, $leher_ket, $lhr_jvp, $lhr_jvp_ukuran, $lhr_kel_tiroid, $lhr_kgb, $lhr_kgb_banyak, $lhr_kgb_kltmrh, $lhr_kgb_kons, $lhr_kgb_lokasi, $lhr_kgb_mobille, $lhr_kgb_nyeritekan, $lhr_kgb_ukuran, $lhr_tiroid, $lhr_tiroid_brui, $lhr_tiroid_kons, $lhr_trachea, $lhr_trachea_dev);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_leher_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik mammae --*/

	function edit_fisik_mammae()
	{
		$no_medrec                = $this->input->post('nomed');
		$id_poli                  = $this->input->post('idpol');
		$tanggal_kunjungan        = $this->input->post('tgl');
		
		$referer_                 = $this->input->post('referer_');
		
		$mammae_ket               = $this->input->post('MAMMAE_KET');
		$mammae_klt_merah         = $this->input->post('MAMMAE_KLT_MERAH');
		$mammae_klt_orange        = $this->input->post('MAMMAE_KLT_ORANGE');
		$mammae_massa             = $this->input->post('MAMMAE_MASSA');
		$mammae_massa_bentuk      = $this->input->post('MAMMAE_MASSA_BENTUK');
		$mammae_massa_kons        = $this->input->post('MAMMAE_MASSA_KONS');
		$mammae_massa_lokasi_kiri = $this->input->post('MAMMAE_MASSA_LOKASI_KIRI');
		$mammae_massa_lokasi_knn  = $this->input->post('MAMMAE_MASSA_LOKASI_KNN');
		$mammae_massa_mobile      = $this->input->post('MAMMAE_MASSA_MOBILE');
		$mammae_massa_nyeri       = $this->input->post('MAMMAE_MASSA_NYERI');
		$mammae_massa_uk_kiri     = $this->input->post('MAMMAE_MASSA_UK_KIRI');
		$mammae_massa_uk_knn      = $this->input->post('MAMMAE_MASSA_UK_KNN');
		$mammae_papilla_retraks   = $this->input->post('MAMMAE_PAPILLA_RETRAKSI');
		
		$query                    = $this->pasien->pasien_edit_fisik_mammae($no_medrec, $tanggal_kunjungan, $id_poli, $mammae_ket, $mammae_klt_merah, $mammae_klt_orange, $mammae_massa, $mammae_massa_bentuk, $mammae_massa_kons, $mammae_massa_lokasi_kiri, $mammae_massa_lokasi_knn, $mammae_massa_mobile, $mammae_massa_nyeri, $mammae_massa_uk_kiri, $mammae_massa_uk_knn, $mammae_papilla_retraks);
		$hasil['response']        = ($query) ? 1 : 0;
		$hasil['referer_']        = $referer_;
		$hasil['parent_control']  = 'fisik_mammae_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik thiraks --*/

	function edit_fisik_thoraks()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$batas_paru_hati         = $this->input->post('BATAS_PARU_HATI');
		$btsparuhati_ics         = $this->input->post('BTSPARUHATI_ICS');
		$btsparuhati_peranjakan  = $this->input->post('BTSPARUHATI_PERANJAKAN');
		$dada_btk                = $this->input->post('DADA_BTK');
		$dada_btk_lokasi         = $this->input->post('DADA_BTK_LOKASI');
		$dada_grk                = $this->input->post('DADA_GRK');
		$dada_ket                = $this->input->post('DADA_KET');
		$dada_massa_bentuk       = $this->input->post('DADA_MASSA_BENTUK');
		$dada_massa_kltmrh       = $this->input->post('DADA_MASSA_KLTMRH');
		$dada_massa_kons         = $this->input->post('DADA_MASSA_KONS');
		$dada_massa_lokasi       = $this->input->post('DADA_MASSA_LOKASI');
		$dada_massa_mobille      = $this->input->post('DADA_MASSA_MOBILLE');
		$dada_massa_nyeri        = $this->input->post('DADA_MASSA_NYERI');
		$dada_massa_ukuran       = $this->input->post('DADA_MASSA_UKURAN');
		$dada_ms                 = $this->input->post('DADA_MSP');
		
		$query                   = $this->pasien->pasien_edit_fisik_thoraks($no_medrec, $tanggal_kunjungan, $id_poli, $batas_paru_hati ,$btsparuhati_ics ,$btsparuhati_peranjakan ,$dada_btk ,$dada_btk_lokasi ,$dada_grk ,$dada_ket ,$dada_massa_bentuk ,$dada_massa_kltmrh ,$dada_massa_kons ,$dada_massa_lokasi ,$dada_massa_mobille ,$dada_massa_nyeri ,$dada_massa_ukuran ,$dada_ms);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_thoraks_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik paru --*/

	function edit_fisik_paru()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$paru_ket                = $this->input->post('PARU_KET');
		$paru_ronki              = $this->input->post('PARU_RONKI');
		$paru_ronki_ket          = $this->input->post('PARU_RONKI_KET');
		$paru_suara              = $this->input->post('PARU_SUARA');
		$paru_suaranafas         = $this->input->post('PARU_SUARANAFAS');
		$paru_vokalfremitus      = $this->input->post('PARU_VOKALFREMITUS');
		$paru_vokalfremitus_ket  = $this->input->post('PARU_VOKALFREMITUS_KET');
		$paru_vokalresonans      = $this->input->post('PARU_VOKALRESONANS');
		$paru_vokalresonans_ket  = $this->input->post('PARU_VOKALRESONANS_KET');
		
		$query                   = $this->pasien->pasien_edit_fisik_paru($no_medrec, $tanggal_kunjungan, $id_poli, $paru_ket ,$paru_ronki ,$paru_ronki_ket ,$paru_suara ,$paru_suaranafas ,$paru_vokalfremitus ,$paru_vokalfremitus_ket ,$paru_vokalresonans ,$paru_vokalresonans_ket);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'fisik_paru_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik jantung --*/

	function edit_fisik_jantung()
	{
		$no_medrec                   = $this->input->post('nomed');
		$id_poli                     = $this->input->post('idpol');
		$tanggal_kunjungan           = $this->input->post('tgl');
		
		$referer_                    = $this->input->post('referer_');
		
		$jantung_aordias_grade       = $this->input->post('JANTUNG_AORDIAS_GRADE');
		$jantung_aordias_ket         = $this->input->post('JANTUNG_AORDIAS_KET');
		$jantung_aorsis_grade        = $this->input->post('JANTUNG_AORSIS_GRADE');
		$jantung_aorsis_ket          = $this->input->post('JANTUNG_AORSIS_KET');
		$jantung_aorsis_menjalar     = $this->input->post('JANTUNG_AORSIS_MENJALAR');
		$jantung_aorta               = $this->input->post('JANTUNG_AORTA');
		$jantung_aorta_diastolik     = $this->input->post('JANTUNG_AORTA_DIASTOLIK');
		$jantung_aorta_sistolik      = $this->input->post('JANTUNG_AORTA_SISTOLIK');
		$jantung_batas_atas          = $this->input->post('JANTUNG_BATAS_ATAS');
		$jantung_batas_kanan         = $this->input->post('JANTUNG_BATAS_KANAN');
		$jantung_batas_ket           = $this->input->post('JANTUNG_BATAS_KET');
		$jantung_batas_kiri          = $this->input->post('JANTUNG_BATAS_KIRI');
		$jantung_bising_ket          = $this->input->post('JANTUNG_BISING_KET');
		$jantung_ictcrds             = $this->input->post('JANTUNG_ICTCRDS');
		$jantung_ictcrds_plus        = $this->input->post('JANTUNG_ICTCRDS_PLUS');
		$jantung_lokasilain_bising   = $this->input->post('JANTUNG_LOKASILAIN_BISING');
		$jantung_midias_grade        = $this->input->post('JANTUNG_MIDIAS_GRADE');
		$jantung_midias_ket          = $this->input->post('JANTUNG_MIDIAS_KET');
		$jantung_misis_grade         = $this->input->post('JANTUNG_MISIS_GRADE');
		$jantung_misis_ket           = $this->input->post('JANTUNG_MISIS_KET');
		$jantung_misis_menjalar      = $this->input->post('JANTUNG_MISIS_MENJALAR');
		$jantung_mitral              = $this->input->post('JANTUNG_MITRAL');
		$jantung_mitral_diastolik    = $this->input->post('JANTUNG_MITRAL_DIASTOLIK');
		$jantung_mitral_sistolik     = $this->input->post('JANTUNG_MITRAL_SISTOLIK');
		$jantung_puldias_grade       = $this->input->post('JANTUNG_PULDIAS_GRADE');
		$jantung_puldias_ket         = $this->input->post('JANTUNG_PULDIAS_KET');
		$jantung_pulmonal            = $this->input->post('JANTUNG_PULMONAL');
		$jantung_pulmonal_dias       = $this->input->post('JANTUNG_PULMONAL_DIAS');
		$jantung_pulmonal_sistolik   = $this->input->post('JANTUNG_PULMONAL_SISTOLIK');
		$jantung_pulsis_grade        = $this->input->post('JANTUNG_PULSIS_GRADE');
		$jantung_pulsis_ket          = $this->input->post('JANTUNG_PULSIS_KET');
		$jantung_pulsis_menjalar     = $this->input->post('JANTUNG_PULSIS_MENJALAR');
		$jantung_tridias_grade       = $this->input->post('JANTUNG_TRIDIAS_GRADE');
		$jantung_tridias_ket         = $this->input->post('JANTUNG_TRIDIAS_KET');
		$jantung_trikuspid           = $this->input->post('JANTUNG_TRIKUSPID');
		$jantung_trikuspid_diastolik = $this->input->post('JANTUNG_TRIKUSPID_DIASTOLIK');
		$jantung_trikuspid_sistoli   = $this->input->post('JANTUNG_TRIKUSPID_SISTOLIK');
		$jantung_trisis_grade        = $this->input->post('JANTUNG_TRISIS_GRADE');
		$jantung_trisis_ket          = $this->input->post('JANTUNG_TRISIS_KET');
		$jantung_trisis_menjalar     = $this->input->post('JANTUNG_TRISIS_MENJALAR');
		$jantung_ukura               = $this->input->post('JANTUNG_UKURAN');
		
		$query                       = $this->pasien->pasien_edit_fisik_jantung($no_medrec, $tanggal_kunjungan, $id_poli, $jantung_aordias_grade, $jantung_aordias_ket, $jantung_aorsis_grade, $jantung_aorsis_ket, $jantung_aorsis_menjalar, $jantung_aorta, $jantung_aorta_diastolik, $jantung_aorta_sistolik, $jantung_batas_atas, $jantung_batas_kanan, $jantung_batas_ket, $jantung_batas_kiri, $jantung_bising_ket, $jantung_ictcrds, $jantung_ictcrds_plus, $jantung_lokasilain_bising, $jantung_midias_grade, $jantung_midias_ket, $jantung_misis_grade, $jantung_misis_ket, $jantung_misis_menjalar, $jantung_mitral, $jantung_mitral_diastolik, $jantung_mitral_sistolik, $jantung_puldias_grade, $jantung_puldias_ket, $jantung_pulmonal, $jantung_pulmonal_dias, $jantung_pulmonal_sistolik, $jantung_pulsis_grade, $jantung_pulsis_ket, $jantung_pulsis_menjalar, $jantung_tridias_grade, $jantung_tridias_ket, $jantung_trikuspid, $jantung_trikuspid_diastolik, $jantung_trikuspid_sistoli, $jantung_trisis_grade, $jantung_trisis_ket, $jantung_trisis_menjalar, $jantung_ukura);
		$hasil['response']           = ($query) ? 1 : 0;
		$hasil['referer_']           = $referer_;
		$hasil['parent_control']     = 'fisik_jantung_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik abdomen --*/

	function edit_fisik_abdomen()
	{
		$no_medrec                 = $this->input->post('nomed');
		$id_poli                   = $this->input->post('idpol');
		$tanggal_kunjungan         = $this->input->post('tgl');
		
		$referer_                  = $this->input->post('referer_');
		
		$abdomen                   = $this->input->post('ABDOMEN');
		$abd_hepar                 = $this->input->post('ABD_HEPAR');
		$abd_hepar_bac             = $this->input->post('ABD_HEPAR_BAC');
		$abd_hepar_bpx             = $this->input->post('ABD_HEPAR_BPX');
		$abd_hepar_konsistensi     = $this->input->post('ABD_HEPAR_KONSISTENSI');
		$abd_hepar_muka_brui       = $this->input->post('ABD_HEPAR_MUKA_BRUI');
		$abd_hepar_permukaan       = $this->input->post('ABD_HEPAR_PERMUKAAN');
		$abd_hepar_tepi            = $this->input->post('ABD_HEPAR_TEPI');
		$abd_konsistensi           = $this->input->post('ABD_KONSISTENSI');
		$abd_lainlain              = $this->input->post('ABD_LAINLAIN');
		$abd_lien                  = $this->input->post('ABD_LIEN');
		$abd_lien_kons             = $this->input->post('ABD_LIEN_KONS');
		$abd_lien_teraba           = $this->input->post('ABD_LIEN_TERABA');
		$abd_massa                 = $this->input->post('ABD_MASSA');
		$abd_massa_bentuk          = $this->input->post('ABD_MASSA_BENTUK');
		$abd_massa_kltmrh          = $this->input->post('ABD_MASSA_KLTMRH');
		$abd_massa_kons            = $this->input->post('ABD_MASSA_KONS');
		$abd_massa_lokasi          = $this->input->post('ABD_MASSA_LOKASI');
		$abd_massa_mobille         = $this->input->post('ABD_MASSA_MOBILLE');
		$abd_massa_nyeri           = $this->input->post('ABD_MASSA_NYERI');
		$abd_massa_ukuran          = $this->input->post('ABD_MASSA_UKURAN');
		$abd_nyerilepas            = $this->input->post('ABD_NYERILEPAS');
		$abd_nyerilepas_lokasi     = $this->input->post('ABD_NYERILEPAS_LOKASI');
		$abd_nyeritekan_lokasi     = $this->input->post('ABD_NYERITEKAN_LOKASI');
		$abd_nyeri_tekan           = $this->input->post('ABD_NYERI_TEKAN');
		$abd_refferedpain          = $this->input->post('ABD_REFFEREDPAIN');
		$abd_refferedpain_lokasi   = $this->input->post('ABD_REFFEREDPAIN_LOKASI');
		$abd__hepar_nyeritekan     = $this->input->post('ABD__HEPAR_NYERITEKAN');
		$abd_vesikaurinaria_teraba = $this->input->post('ABD_VESIKAURINARIA_TERABA');
		$abd_ginjal_nyeriketok     = $this->input->post('ABD_GINJAL_NYERIKETOK');
		
		$query                     = $this->pasien->pasien_edit_fisik_abdomen($no_medrec, $tanggal_kunjungan, $id_poli, $abdomen ,$abd_hepar ,$abd_hepar_bac ,$abd_hepar_bpx ,$abd_hepar_konsistensi ,$abd_hepar_muka_brui ,$abd_hepar_permukaan ,$abd_hepar_tepi ,$abd_konsistensi ,$abd_lainlain ,$abd_lien ,$abd_lien_kons ,$abd_lien_teraba ,$abd_massa ,$abd_massa_bentuk ,$abd_massa_kltmrh ,$abd_massa_kons ,$abd_massa_lokasi ,$abd_massa_mobille ,$abd_massa_nyeri ,$abd_massa_ukuran ,$abd_nyerilepas ,$abd_nyerilepas_lokasi ,$abd_nyeritekan_lokasi ,$abd_nyeri_tekan ,$abd_refferedpain ,$abd_refferedpain_lokasi ,$abd__hepar_nyeritekan, $abd_vesikaurinaria_teraba, $abd_ginjal_nyeriketok);
		$hasil['response']         = ($query) ? 1 : 0;
		$hasil['referer_']         = $referer_;
		$hasil['parent_control']   = 'fisik_abdomen_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik genitalia --*/

	function edit_fisik_genitalia()
	{
		$no_medrec                  = $this->input->post('nomed');
		$id_poli                    = $this->input->post('idpol');
		$tanggal_kunjungan          = $this->input->post('tgl');
		
		$referer_                   = $this->input->post('referer_');
		
		$genitalia_hemorroid        = $this->input->post('GENITALIA_HEMORROID');
		$genitalia_hemorroid_lokasi = $this->input->post('GENITALIA_HEMORROID_LOKASI');
		$genitalia_hernia           = $this->input->post('GENITALIA_HERNIA');
		$genitalia_hernia_lokasi    = $this->input->post('GENITALIA_HERNIA_LOKASI');
		$genitalia_hidrocel         = $this->input->post('GENITALIA_HIDROCEL');
		$genitalia_hidrocel_lokasi  = $this->input->post('GENITALIA_HIDROCEL_LOKASI');
		$genitalia_ket              = $this->input->post('GENITALIA_KET');
		$genitalia_ulcer            = $this->input->post('GENITALIA_ULCER');
		$genitalia_ulcer_lokasi     = $this->input->post('GENITALIA_ULCER_LOKASI');
		
		$query                      = $this->pasien->pasien_edit_fisik_genitalia($no_medrec, $tanggal_kunjungan, $id_poli, $genitalia_hemorroid,$genitalia_hemorroid_lokasi ,$genitalia_hernia ,$genitalia_hernia_lokasi ,$genitalia_hidrocel ,$genitalia_hidrocel_lokasi ,$genitalia_ket ,$genitalia_ulcer ,$genitalia_ulcer_lokasi);
		$hasil['response']          = ($query) ? 1 : 0;
		$hasil['referer_']          = $referer_;
		$hasil['parent_control']    = 'fisik_genitalia_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik ektermitas --*/

	function edit_fisik_ektremitas()
	{
		$no_medrec                   = $this->input->post('nomed');
		$id_poli                     = $this->input->post('idpol');
		$tanggal_kunjungan           = $this->input->post('tgl');
		
		$referer_                    = $this->input->post('referer_');
		
		$ekstremitas_clubbing        = $this->input->post('EKSTREMITAS_CLUBBING');
		$ekstremitas_clubbing_lokasi = $this->input->post('EKSTREMITAS_CLUBBING_LOKASI');
		$ekstremitas_edema_lokasi    = $this->input->post('EKSTREMITAS_EDEMA_LOKASI');
		$ekstremitas_fraktur         = $this->input->post('EKSTREMITAS_FRAKTUR');
		$ekstremitas_fraktur_ket     = $this->input->post('EKSTREMITAS_FRAKTUR_KET');
		$ekstremitas_fraktur_lokasi  = $this->input->post('EKSTREMITAS_FRAKTUR_LOKASI');
		$ekstremitas_tremor          = $this->input->post('EKSTREMITAS_TREMOR');
		$ekstremitas_tremor_lokasi   = $this->input->post('EKSTREMITAS_TREMOR_LOKASI');
		$ekstremitas_varices         = $this->input->post('EKSTREMITAS_VARICES');
		$ekstremitas_varices_lokasi  = $this->input->post('EKSTREMITAS_VARICES_LOKASI');
		$extremitas_bwh_idema        = $this->input->post('EXTREMITAS_BWH_IDEMA');
		$extremitas_bwh_ket          = $this->input->post('EXTREMITAS_BWH_KET');
		
		$query                       = $this->pasien->pasien_edit_fisik_ektremitas($no_medrec, $tanggal_kunjungan, $id_poli, $ekstremitas_clubbing ,$ekstremitas_clubbing_lokasi ,$ekstremitas_edema_lokasi ,$ekstremitas_fraktur ,$ekstremitas_fraktur_ket ,$ekstremitas_fraktur_lokasi ,$ekstremitas_tremor ,$ekstremitas_tremor_lokasi ,$ekstremitas_varices ,$ekstremitas_varices_lokasi ,$extremitas_bwh_idema ,$extremitas_bwh_ket);
		$hasil['response']           = ($query) ? 1 : 0;
		$hasil['referer_']           = $referer_;
		$hasil['parent_control']     = 'fisik_ektremitas_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik neorologis --*/

	function edit_fisik_neorologis()
	{
		$no_medrec                  = $this->input->post('nomed');
		$id_poli                    = $this->input->post('idpol');
		$tanggal_kunjungan          = $this->input->post('tgl');
		
		$referer_                   = $this->input->post('referer_');
		
		$neurologis_clubbing        = $this->input->post('NEUROLOGIS_CLUBBING');
		$neurologis_clubbing_lokasi = $this->input->post('NEUROLOGIS_CLUBBING_LOKASI');
		$neurologis_tremor          = $this->input->post('NEUROLOGIS_TREMOR');
		$neurologis_tremor_lokasi   = $this->input->post('NEUROLOGIS_TREMOR_LOKASI');
		$neurologis_ket             = $this->input->post('NEUROLOGIS_KET');
		$refleks_apr                = $this->input->post('REFLEKS_APR');
		$refleks_biceps             = $this->input->post('REFLEKS_BICEPS');
		$refleks_ket                = $this->input->post('REFLEKS_KET');
		$refleks_kp                 = $this->input->post('REFLEKS_KP');

		$query                      = $this->pasien->pasien_edit_fisik_neorologis($no_medrec, $tanggal_kunjungan, $id_poli, $neurologis_clubbing,$neurologis_clubbing_lokasi,$neurologis_tremor,$neurologis_tremor_lokasi,$neurologis_ket,$refleks_apr,$refleks_biceps,$refleks_ket,$refleks_kp);
		$hasil['response']          = ($query) ? 1 : 0;
		$hasil['referer_']          = $referer_;
		$hasil['parent_control']    = 'fisik_neorologis_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian Addons ajax
|-------------------------------------------------------------------
*/

/*-- pengobatan inastk --*/

	function get_detail_obat()
	{
		$id              = $this->input->get('ID');
		$obat            = $this->addon->addon_inastkrshs($id);
		$hasil['satuan'] = (Count($obat) > 0) ? $obat[0]['SATUAN'] : '';
		$hasil['kadar']  = (Count($obat) > 0) ? $obat[0]['KADAR'] : '';

		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*-- fisik koordinat taging gambar --*/
	
	function save_koordinat()
	{
		$atribut           = $this->input->post('ps');
		$left              = $this->input->post('l');
		$right             = $this->input->post('t');
		$string            = $this->input->post('str');
		$atribut           = explode('/', $atribut);
		$medrec            = $atribut[0];
		$tgl               = $atribut[1];
		$poli              = $atribut[2];
		$query             = $this->addon->addon_save_koordinat($medrec, $tgl, $poli, $left, $right, $string);

		$hasil['response'] = ($query) ? 1 : 0;
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function load_koordinat()
	{
		$atribut = $this->input->post('ps');
		$atribut = explode('/', $atribut);
		$medrec = $atribut[0];
		$tgl = $atribut[1];
		$poli = $atribut[2];
		$query = $this->addon->addon_load_koordinat($medrec, $tgl, $poli);
		foreach($query as $key=>$value){
			$this->output->set_content_type('application/json')->set_output($value['KOOR_TAG']);
			return;
		}
	}

/*-- transaksi penunjang --*/

	function save_penunjang()
	{
		modules::run('login/is_locked');

		$id_jns_layanan = $this->input->post('ID_JNS_LAYANAN');
		$no_medrec      = $this->input->post('nomed');
		$tanggal        = $this->input->post('tgl');
		$id_poli        = $this->input->post('idpol');

		foreach($id_jns_layanan as $key=>$value){
			$query = $this->pasien->pasien_save_penunjang_content($no_medrec,$tanggal, $id_poli, $value);
		}

		debuging($query,'die');
	}

	function delete_penunjang()
	{
		modules::run('login/is_locked');
		
		$id_jns_layanan  = $this->input->post('ID_LAY');
		$no_medrec       = $this->input->post('nomed');
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		
		$query           = $this->pasien->pasien_delete_penunjang_content($no_medrec,$tanggal, $id_poli, $id_jns_layanan);
		$result['query'] = ($query) ? '1' : '0';
		$this->output->set_content_type('application/json')->set_output(json_encode($result));
		return;
	}

/*
|------------------------------------------------------------------- 
| Bagian asuhan keperawatan
|-------------------------------------------------------------------
*/

	function add_asuhan_keperawatan()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$bahasa1                 = $this->input->post('BAHASA1');
		$bahasa2                 = $this->input->post('BAHASA2');
		$bahasa3                 = $this->input->post('BAHASA3');
		$bahasa_isyarat          = $this->input->post('BAHASA_ISYARAT');
		$bicara                  = $this->input->post('BICARA');
		$bicara_gangguan         = $this->input->post('BICARA_GANGGUAN');
		$bicara_harian           = $this->input->post('BAHASA_HARIAN');
		$cara_bljr1              = $this->input->post('CARA_BLJR1');
		$cara_bljr2              = $this->input->post('CARA_BLJR2');
		$cara_bljr3              = $this->input->post('CARA_BLJR3');
		$cara_bljr4              = $this->input->post('CARA_BLJR4');
		$cara_bljr5              = $this->input->post('CARA_BLJR5');
		$hambatan_bljr           = $this->input->post('HAMBATAN_BLJR');
		$hambatan_bljr1          = $this->input->post('HAMBATAN_BLJR1');
		$hambatan_bljr2          = $this->input->post('HAMBATAN_BLJR2');
		$hambatan_bljr3          = $this->input->post('HAMBATAN_BLJR3');
		$hambatan_bljr4          = $this->input->post('HAMBATAN_BLJR4');
		$hambatan_bljr5          = $this->input->post('HAMBATAN_BLJR5');
		$hambatan_bljr6          = $this->input->post('HAMBATAN_BLJR6');
		$hambatan_bljr7          = $this->input->post('HAMBATAN_BLJR7');
		$hambatan_bljr8          = $this->input->post('HAMBATAN_BLJR8');
		$kebiasaan1              = $this->input->post('KEBIASAAN1');
		$kebiasaan2              = $this->input->post('KEBIASAAN2');
		$kebiasaan3              = $this->input->post('KEBIASAAN3');
		$keb_pembelajaran1       = $this->input->post('KEB_PEMBELAJARAN1');
		$keb_pembelajaran2       = $this->input->post('KEB_PEMBELAJARAN2');
		$keb_pembelajaran3       = $this->input->post('KEB_PEMBELAJARAN3');
		$keb_pembelajaran4       = $this->input->post('KEB_PEMBELAJARAN4');
		$keb_pembelajaran5       = $this->input->post('KEB_PEMBELAJARAN5');
		$penterjemah             = $this->input->post('PENTERJEMAH');
		$status_tinggal          = $this->input->post('STATUS_TINGGAL');
		
		$query                   = $this->pasien->pasien_add_asuhan_keperawatan($no_medrec, $id_poli, $tanggal_kunjungan, $bahasa1, $bahasa2, $bahasa3, $bahasa_isyarat, $bicara, $bicara_gangguan, $bicara_harian, $cara_bljr1, $cara_bljr2, $cara_bljr3, $cara_bljr4, $cara_bljr5, $hambatan_bljr, $hambatan_bljr1, $hambatan_bljr2, $hambatan_bljr3, $hambatan_bljr4, $hambatan_bljr5, $hambatan_bljr6, $hambatan_bljr7, $hambatan_bljr8, $kebiasaan1, $kebiasaan2, $kebiasaan3, $keb_pembelajaran1, $keb_pembelajaran2, $keb_pembelajaran3, $keb_pembelajaran4, $keb_pembelajaran5, $penterjemah, $status_tinggal);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'asuhan_keperawatan_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

	function edit_asuhan_keperawatan()
	{
		$no_medrec               = $this->input->post('nomed');
		$id_poli                 = $this->input->post('idpol');
		$tanggal_kunjungan       = $this->input->post('tgl');
		
		$referer_                = $this->input->post('referer_');
		
		$bahasa1                 = $this->input->post('BAHASA1');
		$bahasa2                 = $this->input->post('BAHASA2');
		$bahasa3                 = $this->input->post('BAHASA3');
		$bahasa_isyarat          = $this->input->post('BAHASA_ISYARAT');
		$bicara                  = $this->input->post('BICARA');
		$bicara_gangguan         = $this->input->post('BICARA_GANGGUAN');
		$bicara_harian           = $this->input->post('BAHASA_HARIAN');
		$cara_bljr1              = $this->input->post('CARA_BLJR1');
		$cara_bljr2              = $this->input->post('CARA_BLJR2');
		$cara_bljr3              = $this->input->post('CARA_BLJR3');
		$cara_bljr4              = $this->input->post('CARA_BLJR4');
		$cara_bljr5              = $this->input->post('CARA_BLJR5');
		$hambatan_bljr           = $this->input->post('HAMBATAN_BLJR');
		$hambatan_bljr1          = $this->input->post('HAMBATAN_BLJR1');
		$hambatan_bljr2          = $this->input->post('HAMBATAN_BLJR2');
		$hambatan_bljr3          = $this->input->post('HAMBATAN_BLJR3');
		$hambatan_bljr4          = $this->input->post('HAMBATAN_BLJR4');
		$hambatan_bljr5          = $this->input->post('HAMBATAN_BLJR5');
		$hambatan_bljr6          = $this->input->post('HAMBATAN_BLJR6');
		$hambatan_bljr7          = $this->input->post('HAMBATAN_BLJR7');
		$hambatan_bljr8          = $this->input->post('HAMBATAN_BLJR8');
		$kebiasaan1              = $this->input->post('KEBIASAAN1');
		$kebiasaan2              = $this->input->post('KEBIASAAN2');
		$kebiasaan3              = $this->input->post('KEBIASAAN3');
		$keb_pembelajaran1       = $this->input->post('KEB_PEMBELAJARAN1');
		$keb_pembelajaran2       = $this->input->post('KEB_PEMBELAJARAN2');
		$keb_pembelajaran3       = $this->input->post('KEB_PEMBELAJARAN3');
		$keb_pembelajaran4       = $this->input->post('KEB_PEMBELAJARAN4');
		$keb_pembelajaran5       = $this->input->post('KEB_PEMBELAJARAN5');
		$penterjemah             = $this->input->post('PENTERJEMAH');
		$status_tinggal          = $this->input->post('STATUS_TINGGAL');
		
		$query                   = $this->pasien->pasien_edit_asuhan_keperawatan($no_medrec, $id_poli, $tanggal_kunjungan, $bahasa1, $bahasa2, $bahasa3, $bahasa_isyarat, $bicara, $bicara_gangguan, $bicara_harian, $cara_bljr1, $cara_bljr2, $cara_bljr3, $cara_bljr4, $cara_bljr5, $hambatan_bljr, $hambatan_bljr1, $hambatan_bljr2, $hambatan_bljr3, $hambatan_bljr4, $hambatan_bljr5, $hambatan_bljr6, $hambatan_bljr7, $hambatan_bljr8, $kebiasaan1, $kebiasaan2, $kebiasaan3, $keb_pembelajaran1, $keb_pembelajaran2, $keb_pembelajaran3, $keb_pembelajaran4, $keb_pembelajaran5, $penterjemah, $status_tinggal);
		$hasil['response']       = ($query) ? 1 : 0;
		$hasil['referer_']       = $referer_;
		$hasil['parent_control'] = 'asuhan_keperawatan_tb_';
		$this->output->set_content_type('application/json')->set_output(json_encode($hasil));
		return;
	}

/*
|------------------------------------------------------------------- 
| Debug
|-------------------------------------------------------------------
*/
	function s_sess_all()
	{
		debuging($this->session->all_userdata());
	}

/*
|------------------------------------------------------------------
| autocomplete feeddata
|------------------------------------------------------------------
*/
	function autofeed_data()
	{
		$str = strtolower($this->input->post('str'));
		$query = $this->pasien->pasien_get_biodata_feed_($str);

		foreach($query as $key => $value){
			echo '<li class="autocomplete_request" id="'. $value["NO_MEDREC"] .'">';
			echo "<label class='autocomplete_label no_medrec'>". highlight_phrase($value['NO_MEDREC'], $str, '<span style="color:#FF0000">', '</span>') ."</label>";
			echo "<label class='autocomplete_label nama'>". highlight_phrase($value['NAMA'], $str, '<span style="color:#FF0000">', '</span>') ."</label>";
			echo "<label class='autocomplete_label sex'>".get_latin($value['SEX'],'jenis_kelamin')."</label>";

			$tempat_lahir = isset($value['TMPT_LAHIR']) ? $value['TMPT_LAHIR'] : '-';
			$tanggal_lahir = isset($value['TGL_LAHIR']) ? $value['TGL_LAHIR'] : '---';
			echo "<label class='autocomplete_label ttl'>". $tempat_lahir .', '. $tanggal_lahir ."</label>";
			echo "</li>";
		}
	}

	function set_dokter_password()
	{
		$sql = "select * from DATA_DOKTER";
		$query = $this->db->query($sql)->result_array();

		foreach($query as $key=>$value){
			$md5 = md5($value['ID_DOKTER']);

			$data = array(
				'PASSWORD' => $md5,
			);

			$this->db->where('ID_DOKTER', $value['ID_DOKTER']);
			$this->db->update('DATA_DOKTER', $data);
		}
	}
}