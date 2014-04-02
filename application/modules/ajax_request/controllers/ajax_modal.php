<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_modal extends MX_Controller {

	var $lokasi = 'ajax_request/modal/';

	function __construct()
	{
		modules::run('login/is_locked');
		modules::run('login/is_logged_in');
		
		$this->load->module($this->lokasi.'a_m_catatan_khusus');
		$this->load->module($this->lokasi.'a_m_anamnesis');
		$this->load->module($this->lokasi.'a_m_prosedur');
		$this->load->module($this->lokasi.'a_m_daftar_ulang');
		$this->load->module($this->lokasi.'a_m_konsul_irj');
		$this->load->module($this->lokasi.'a_m_diagnosa');
		$this->load->module($this->lokasi.'a_m_pengobatan_inastk');
		$this->load->module($this->lokasi.'a_m_fisik');
		$this->load->module($this->lokasi.'a_m_asuhan_keperawatan');
	}

/*-- catatan irj --*/
	function modal_cat_()
	{
		$this->a_m_catatan_khusus->modal_cat_();
	}

	function modal_cat_edit()
	{
		$this->a_m_catatan_khusus->modal_cat_edit_();
	}
/*-- /.catatan irj --*/


/*-- anamnesa irj --*/
	function modal_anam_()
	{
		$this->a_m_anamnesis->modal_anam_();
	}

	function modal_anam_edit()
	{
		$this->a_m_anamnesis->modal_anam_edit_();
	}
/*-- /.anamnesa irj --*/


/*-- prosedur irj --*/
	function modal_prosedur_()
	{
		$this->a_m_prosedur->modal_prosedur_();
	}

	function modal_prosedur_edit_()
	{
		$this->a_m_prosedur->modal_prosedur_edit_();
	}
/*-- /.prosedur irj --*/


/*-- daftar ulang --*/
	function modal_daftar_ulang_()
	{
		$this->a_m_daftar_ulang->modal_daftar_ulang_();
	}
/*-- /.daftar ulang --*/


/*-- konsul irj --*/
	function modal_permohonan_konsul_()
	{
		$this->a_m_konsul_irj->modal_permohonan_konsul_();
	}

	function modal_jawaban_konsul_()
	{
		$this->a_m_konsul_irj->modal_jawaban_konsul_();
	}

	function modal_edit_permohonan_konsul_()
	{
		$this->a_m_konsul_irj->modal_edit_permohonan_konsul_();
	}
/*-- /.konsul irj --*/


/*--diagnosa--*/
	function modal_diagnosa_()
	{
		$this->a_m_diagnosa->modal_diagnosa_();
	}

	function modal_diagnosa_edit_()
	{
		$this->a_m_diagnosa->modal_diagnosa_edit_();
	}
/*--/.diagnosa--*/


/*--pengobatan inastk--*/
	function modal_pengobatan_inastk_()
	{
		$this->a_m_pengobatan_inastk->modal_pengobatan_inastk_();
	}

	function modal_pengobatan_inastk_edit_()
	{
		$this->a_m_pengobatan_inastk->modal_pengobatan_inastk_edit_();
	}
/*--/.pengobatan inastk--*/

/*--fisik--*/
	function modal_fisik_kesan_umum_()
	{
		$this->a_m_fisik->modal_kesan_umum_();
	}

	function modal_fisik_kesan_umum_edit_()
	{
		$this->a_m_fisik->modal_kesan_umum_edit_();
	}

	function modal_fisik_kepala_()
	{
		$this->a_m_fisik->modal_kepala_();
	}

	function modal_fisik_leher_()
	{
		$this->a_m_fisik->modal_leher_();
	}

	function modal_fisik_mammae_()
	{
		$this->a_m_fisik->modal_mammae_();
	}

	function modal_fisik_thoraks_()
	{
		$this->a_m_fisik->modal_thoraks_();
	}

	function modal_fisik_paru_()
	{
		$this->a_m_fisik->modal_paru_();
	}

	function modal_fisik_jantung_()
	{
		$this->a_m_fisik->modal_jantung_();
	}

	function modal_fisik_abdomen_()
	{
		$this->a_m_fisik->modal_abdomen_();
	}

	function modal_fisik_genitalia_()
	{
		$this->a_m_fisik->modal_genitalia_();
	}

	function modal_fisik_ektremitas_()
	{
		$this->a_m_fisik->modal_ektremitas_();
	}

	function modal_fisik_neurologis_()
	{
		$this->a_m_fisik->modal_neurologis_();
	}
/*--/.fisik--*/

/*-- asuhan keperawatan --*/
	function modal_asuhan_keperawatan_()
	{
		$this->a_m_asuhan_keperawatan->modal_asuhan_keperawatan_();
	}

	function modal_asuhan_keperawatan_edit_()
	{
		$this->a_m_asuhan_keperawatan->modal_asuhan_keperawatan_edit_();
	}

	function modal_disposisi_asuhan_keperawatan_()
	{
		$this->a_m_asuhan_keperawatan->modal_disposisi_asuhan_keperawatan_();
	}

	function modal_disposisi_asuhan_keperawatan_edit_()
	{
		$this->a_m_asuhan_keperawatan->modal_disposisi_asuhan_keperawatan_edit_();
	}
/*--/. asuhan kepewatan --*/

}