<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_request extends MX_Controller {

	var $lokasi = 'ajax_request/request/';

	function __construct()
	{
		modules::run('login/is_logged_in');
		
		$this->load->module($this->lokasi.'a_r_biodata');
		$this->load->module($this->lokasi.'a_r_daftar_ulang');
		$this->load->module($this->lokasi.'a_r_anamnesis');
		$this->load->module($this->lokasi.'a_r_catatan_khusus');
		$this->load->module($this->lokasi.'a_r_pelayanan_poli');
		$this->load->module($this->lokasi.'a_r_prosedur');
		$this->load->module($this->lokasi.'a_r_konsul');
		$this->load->module($this->lokasi.'a_r_pengobatan_inastik');
		$this->load->module($this->lokasi.'a_r_diagnosa');
		$this->load->module($this->lokasi.'a_r_fisik');
		$this->load->module($this->lokasi.'a_r_penunjang');
		$this->load->module($this->lokasi.'a_r_asuhan_keperawatan');
	}

/*
|-------------------------------------------
| request tampilan biodata
|-------------------------------------------
*/
	function bio_tb_()
	{
		$this->a_r_biodata->bio_tb_();
	}

	function rp_bio_tb_($no_medrec)
	{
		$this->a_r_biodata->rp_bio_tb_($no_medrec);
	}

/*
|-------------------------------------------
| request tampilan daftar ulang
|-------------------------------------------
*/
	function daful_tb_()
	{
		$this->a_r_daftar_ulang->daful_tb_();
	}

	function rp_daful_tb_($no_medrec)
	{
		$this->a_r_daftar_ulang->rp_daful_tb_($no_medrec);	
	}

/*
|-------------------------------------------
| request tampilan anamnesa
|-------------------------------------------
*/
	function anam_tb_()
	{
		$this->a_r_anamnesis->anam_tb_();
	}

	function rp_anam_tb_($no_medrec,$tanggal,$id_poli)
	{
		$this->a_r_anamnesis->rp_anam_tb_($no_medrec,$tanggal,$id_poli);	
	}

/*
|-------------------------------------------
| request tampilan catatan khusus
|-------------------------------------------
*/
	function khusus_tb_()
	{
		$this->a_r_catatan_khusus->khusus_tb_();
	}

/*
|-------------------------------------------
| request tampilan pelayanan poliklinik
|-------------------------------------------
*/
	function pelayanan_poli_tb_()
	{
		$this->a_r_pelayanan_poli->pelayanan_poli_tb_();
	}

/*
|-------------------------------------------
| request tampilan prosedur / tindakan
|-------------------------------------------
*/
	function prosedur_tb_()
	{
		$this->a_r_prosedur->prosedur_tb_();
	}

/*
|-------------------------------------------
| request tampilan konsul
|-------------------------------------------
*/
	function konsul_tb_()
	{
		$this->a_r_konsul->konsul_tb_();
	}

/*
|-------------------------------------------
| request tampilan pengobatan inastk
|-------------------------------------------
*/
	function pengobatan_inastik_tb_()
	{
		$this->a_r_pengobatan_inastik->pengobatan_inastik_tb_();
	}

/*
|-------------------------------------------
| request tampilan penunjang
|-------------------------------------------
*/
	function penunjang_tb_()
	{
		$this->a_r_penunjang->penunjang_tb_();
	}

	function penunjang_content_()
	{
		$this->a_r_penunjang->get_penunjang_content();
	}

/*
|-------------------------------------------
| request tampilan diagnosa
|-------------------------------------------
*/
	function diagnosa_tb_()
	{
		$this->a_r_diagnosa->diagnosa_tb_();
	}

/*
|-------------------------------------------
| request tampilan fisik
|-------------------------------------------
*/
	function fisik_tb_()
	{
		$this->a_r_fisik->fisik_tb_();
	}

	function fisik_neorologis_tb_()
	{
		$this->a_r_fisik->fisik_neorologis_tb_();
	}

	function fisik_ektremitas_tb_()
	{
		$this->a_r_fisik->fisik_ektremitas_tb_();
	}

	function fisik_genitalia_tb_()
	{
		$this->a_r_fisik->fisik_genitalia_tb_();
	}

	function fisik_abdomen_tb_()
	{
		$this->a_r_fisik->fisik_abdomen_tb_();
	}

	function fisik_paru_tb_()
	{
		$this->a_r_fisik->fisik_paru_tb_();
	}

	function fisik_jantung_tb_()
	{
		$this->a_r_fisik->fisik_jantung_tb_();
	}

	function fisik_thoraks_tb_()
	{
		$this->a_r_fisik->fisik_thoraks_tb_();
	}

	function fisik_mammae_tb_()
	{
		$this->a_r_fisik->fisik_mammae_tb_();
	}

	function fisik_leher_tb_()
	{
		$this->a_r_fisik->fisik_leher_tb_();
	}

	function fisik_kepala_tb_()
	{
		$this->a_r_fisik->fisik_kepala_tb_();
	}
/*
|-------------------------------------------
| request asuhan keperawatan
|-------------------------------------------
*/
	function asuhan_keperawatan_tb_()
	{
		$this->a_r_asuhan_keperawatan->asuhan_keperawatan_tb_();
	}

}

/* End of file ajax_request.php */
/* Location: ./application/modules/ajax_request/controllers/ajax_request.php */