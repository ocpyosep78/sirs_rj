<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien_model extends CI_Model {

/*-- BIODATA --*/
	function pasien_get_biodata($no_medrec)
	{
		$sql = "SELECT NO_MEDREC, NAMA, SEX, TMPT_LAHIR, TGL_LAHIR, STATUS, AGAMA, NO_ASURANSI, PENSIUNAN, GOLDARAH, ALAMAT, RT, RW, KELURAHAN, KECAMATAN, ID_DAERAH, PEKERJAAN, WNEGARA, SUKU, NOTLP, TGL_DAFTAR, PENDIDIKAN, NO_TLP_HP, IBU
				FROM PASIEN_IRJ";
				
		$sql .= ($no_medrec !== '') ? " WHERE NO_MEDREC = '$no_medrec'" : "";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
/*-- /.BIODATA --*/


/*-- DAFTAR_ULANG --*/
	function pasien_get_group_daftar_ulang($no_medrec, $type)
	{
		$string2 = '';
		$type = ($type == 'MONTH') ? 'MM' : 'YYYY';
		$sql = "SELECT DISTINCT(TO_CHAR(TGL_KUNJUNGAN, '".$type."')) as \"RESULT\" FROM DAFTAR_ULANG WHERE NO_MEDREC = '".$no_medrec."' ORDER BY RESULT";
		$query = @$this->db->query($sql)->result_array();

		$string2 = '<select class="filter_select" name="'.$type.'">';
		$string2 .= '<option value="">---</option>';
		foreach($query as $key=>$value){
			$string2 .= '<option value="'.$value['RESULT'].'">';
			$string2 .= ($type == 'MM') ? month_name( (int) $value['RESULT']) : $value['RESULT'];
			$string2 .= '</option>';
		}
		$string2 .= '</select>';

		return $string2;
	}

	function pasien_get_daftar_ulang($no_medrec, $tanggal = '', $id_poli = '')
	{
		$id_dokter = $this->session->userdata('userid');
		$sql = "SELECT du.*, po.*
				FROM POLIKLINIK po, DAFTAR_ULANG du 
				WHERE du.ID_POLI = po.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'";
		
		$sql .= ($tanggal !== '') ? " AND du.TGL_KUNJUNGAN = '$tanggal'" : "";
		$sql .= ($id_poli !== '') ? " AND du.ID_POLI = '$id_poli'" : "";
		$sql .= " ORDER BY du.TGL_KUNJUNGAN DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_get_biodata_feed_($str)
	{
		$sql = "SELECT * FROM PASIEN_IRJ WHERE ";

		if(is_numeric($str)){
			$sql .= "NO_MEDREC like '%$str%'";
		}else{
			$sql .= "lower(NAMA) like '%$str%'";
		}

		$sql .= " AND ROWNUM < 15";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_get_daftar_ulang_filter($no_medrec, $bulan = '', $tahun = '')
	{
		$sql = "SELECT du.*, po.*
				FROM POLIKLINIK po, DAFTAR_ULANG du 
				WHERE du.ID_POLI = po.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'";
		
		$sql .= ($bulan !== '') ? " AND TO_CHAR(du.TGL_KUNJUNGAN, 'MM') = '$bulan'" : '';
		$sql .= ($tahun !== '') ? " AND TO_CHAR(du.TGL_KUNJUNGAN, 'YYYY') = '$tahun'" : '';
		$sql .= " ORDER BY du.TGL_KUNJUNGAN DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_edit_daftar_ulang($no_medrec, $tanggal, $id_poli, $jns_kunj, $id_dokter, $prekondisi, $id_drg, $tindak_lanjut, $id_poli2)
	{
		$data = array(
			'NO_MEDREC'     => $no_medrec,
			'TGL_KUNJUNGAN' => $tanggal,
			'ID_POLI'       => $id_poli,
			'JNS_KUNJ'      => $jns_kunj,
			'ID_DOKTER'     => $id_dokter,
			'PREKONDISI'    => $prekondisi,
			'ID_DRG'        => $id_drg,
			'TINDAKLANJUT'  => $tindak_lanjut,
			'ID_POLI2'      => $id_poli2
		);
		
		$this->db->where('NO_MEDREC', $no_medrec);
		$this->db->where('TGL_KUNJUNGAN', $tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('DAFTAR_ULANG', $data);
		return $query;
	}
/*--/.DAFTAR ULANG--*/


/*-- ANAMNESA --*/
	function pasien_get_anamnesa($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT an.* 
				FROM DAFTAR_ULANG du, ANAMNESA_IRJ an 
				WHERE an.NO_MEDREC = du.NO_MEDREC 
					AND an.TGL_KUNJUNGAN = du.TGL_KUNJUNGAN 
					AND an.ID_POLI = du.ID_POLI
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_tambah_anamnesa($no_medrec, $tanggal, $id_poli, $sumber, $keluhan_utama, $pasien_illnes, $anamnesa, $riwayat_penyakit, $riwayat_penyakit_keluarga)
	{
		$data = array('ID_POLI' => $id_poli, 
					  'NO_MEDREC' => $no_medrec, 
					  'TGL_KUNJUNGAN' => $tanggal, 
					  'SUMBER' => $sumber, 
					  'KELUHAN_UTAMA' => $keluhan_utama, 
					  'PASIEN_ILLNES' => $pasien_illnes, 
					  'ANAMNESA' => $anamnesa, 
					  'RIWAYAT_PENYAKIT' => $riwayat_penyakit, 
					  'RIWAYAT_PENYAKIT_KELUARGA' => $riwayat_penyakit_keluarga);

		$query = $this->db->insert('ANAMNESA_IRJ', $data);
		return $query;
	}

	function pasien_edit_anamnesa($no_medrec, $tanggal, $id_poli, $sumber, $keluhan_utama, $pasien_illnes, $anamnesa, $riwayat_penyakit, $riwayat_penyakit_keluarga)
	{
		$data = array('SUMBER' => $sumber, 
					  'KELUHAN_UTAMA' => $keluhan_utama, 
					  'PASIEN_ILLNES' => $pasien_illnes, 
					  'ANAMNESA' => $anamnesa, 
					  'RIWAYAT_PENYAKIT' => $riwayat_penyakit, 
					  'RIWAYAT_PENYAKIT_KELUARGA' => $riwayat_penyakit_keluarga);

		$this->db->where('NO_MEDREC', $no_medrec);
		$this->db->where('TGL_KUNJUNGAN', $tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('ANAMNESA_IRJ', $data);
		return $query;
	}
/*--/.ANAMNESA --*/


/*--CATATAN KHUSUS--*/
	function pasien_get_khusus($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT ci.* FROM DAFTAR_ULANG du, CATATAN_IRJ ci
				WHERE du.NO_MEDREC = ci.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = ci.TGL_KUNJUNGAN 
					AND du.ID_POLI = ci.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_tambah_khusus($no_medrec, $tanggal, $id_poli, $catatan)
	{
		$data = array('ID_POLI' => $id_poli, 
					  'NO_MEDREC' => $no_medrec, 
					  'TGL_KUNJUNGAN' => $tanggal, 
					  'CATATAN' => $catatan);
		
		$query = $this->db->insert('CATATAN_IRJ', $data);
		return $query;
	}

	function pasien_edit_khusus($no_medrec, $tanggal, $id_poli, $catatan)
	{
		$data = array('CATATAN' => $catatan);

		$this->db->where('NO_MEDREC', $no_medrec);
		$this->db->where('TGL_KUNJUNGAN', $tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('CATATAN_IRJ', $data);
		return $query;
	}
/*--/.CATATAN KHUSUS--*/


/*--PELAYANAN POLI --*/
	function pasien_get_pelayanan_poli($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT pp.*, jp.*, dd.*, pk.* FROM DAFTAR_ULANG du, PELAYANAN_POLI pp, JENIS_PELAYANAN jp, DATA_DOKTER dd, POLIKLINIK pk
				WHERE du.NO_MEDREC = pp.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = pp.TGL_KUNJUNGAN 
					AND du.ID_POLI = pp.ID_POLI 
					AND pp.ID_JNS_LAYANAN = jp.ID_JNS_LAYANAN
					AND pp.DRPOLI = dd.ID_DOKTER
					AND pp.ID_POLI = pk.ID_POLI
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";
					
		$query = $this->db->query($sql)->result_array();
		return $query;
	}
/*--/.PELAYANAN POLI --*/


/*--PROSEDUR--*/
	function pasien_cek_prosedur_utama($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT icd.*, ic.* FROM DAFTAR_ULANG du, ICD9CM_IRJ icd, ICD9CM ic
				WHERE du.NO_MEDREC = icd.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = icd.TGL_KUNJUNGAN 
					AND du.ID_POLI = icd.ID_POLI 
					AND icd.ID_TIND = ic.ID_TIND
					AND icd.ID = ic.ID
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'
					AND icd.KLASIFIKASI = 'UTAMA'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_get_prosedur($no_medrec, $tanggal, $id_poli, $id = '')
	{
		$sql = "SELECT icd.*, ic.* FROM DAFTAR_ULANG du, ICD9CM_IRJ icd, ICD9CM ic
				WHERE du.NO_MEDREC = icd.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = icd.TGL_KUNJUNGAN 
					AND du.ID_POLI = icd.ID_POLI 
					AND icd.ID_TIND = ic.ID_TIND
					AND icd.ID = ic.ID
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$sql .= ($id !== '') ? " AND icd.id = '$id'" : '';
		$sql .= " ORDER BY icd.KLASIFIKASI DESC";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_tambah_prosedur($no_medrec, $tanggal, $id_poli, $id_tindakan, $klasifikasi, $id_icd)
	{
		$data = array(
				'NO_MEDREC'     => $no_medrec,
				'TGL_KUNJUNGAN' => $tanggal,
				'ID_POLI'       => $id_poli,
				'ID_TIND'       => $id_tindakan,
				'KLASIFIKASI'   => $klasifikasi,
				'ID'            => $id_icd
			);

		$query = $this->db->insert('ICD9CM_IRJ', $data);
		return $query;
	}

	function pasien_edit_prosedur($no_medrec, $tanggal, $id_poli, $id_tindakan, $klasifikasi, $id_icd, $id_lama)
	{
		$data = array(
				'ID_TIND'     => $id_tindakan,
				'KLASIFIKASI' => $klasifikasi,
				'ID'          => $id_icd
			);

		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$this->db->where('ID', $id_lama);

		$query = $this->db->update('ICD9CM_IRJ', $data);
		return $query;
	}

	function pasien_delete_prosedur($no_medrec, $tanggal, $id_poli, $id)
	{
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$this->db->where('ID', $id);

		$query = $this->db->delete('ICD9CM_IRJ');
		return $query;		
	}
/*--/.PROSEDUR--*/


/*--KONSUL--*/
	function pasien_get_konsul($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT ki.*, po.* FROM DAFTAR_ULANG du, KONSUL_IRJ ki, POLIKLINIK po
				WHERE du.NO_MEDREC = ki.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = ki.TGL_KUNJUNGAN 
					AND du.ID_POLI = ki.ID_POLI
					AND ki.ID_POLI2 = po.ID_POLI
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_tambah_permohonan_konsul($no_medrec, $tanggal, $id_poli, $id_konsul, $id_poli2, $problem_konsul, $diagnosa, $isi_konsul, $cat_khusus)
	{
		$id_dokter = $this->session->userdata('userid');

		$data = array(
				'NO_MEDREC'      => $no_medrec,
				'TGL_KUNJUNGAN'  => $tanggal,
				'ID_POLI'        => $id_poli,
				'ID_KONSUL'      => $id_konsul,
				'ID_POLI2'       => $id_poli2,
				'DIAGNOSA'       => $diagnosa,
				'DR_PENGIRIM'    => $id_dokter,
				'ISI_KONSUL'     => $isi_konsul,
				'CAT_KHUSUS'     => $cat_khusus,
				'PROBLEM_KONSUL' => $problem_konsul
			);

		$query = $this->db->insert('KONSUL_IRJ', $data);
		return $query;
	}

	function pasien_tambah_jawaban_konsul($no_medrec, $tanggal, $id_poli, $jawaban, $id_konsul)
	{
		$id_dokter = $this->session->userdata('userid');

		$data = array(
				'DR_PENERIMA'    => $id_dokter,
				'JAWABAN_KONSUL' => $jawaban
			);

		$this->db->where('ID_KONSUL',$id_konsul);
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('KONSUL_IRJ', $data);
		return $query;
	}

	function pasien_edit_permohonan_konsul($no_medrec, $tanggal, $id_poli, $id_konsul, $id_poli2, $problem_konsul, $diagnosa, $isi_konsul, $cat_khusus)
	{
		$id_dokter = $this->session->userdata('userid');

		$data = array(
				'ID_POLI2'       => $id_poli2,
				'DIAGNOSA'       => $diagnosa,
				'ISI_KONSUL'     => $isi_konsul,
				'CAT_KHUSUS'     => $cat_khusus,
				'PROBLEM_KONSUL' => $problem_konsul
			);

		$this->db->where('ID_KONSUL',$id_konsul);
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->UPDATE('KONSUL_IRJ', $data);
		return $query;
	}
/*--/.KONSUL--*/


/*--PENGOBATAN INASTIK--*/
	function pasien_get_pengobatan_inastik($no_medrec, $tanggal, $id_poli, $id_inastk = '')
	{
		$sql = "SELECT pi.* FROM DAFTAR_ULANG du, PENGOBATAN_INASTK pi
				WHERE du.NO_MEDREC = pi.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = pi.TGL_KUNJUNGAN 
					AND du.ID_POLI = pi.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$sql .= ($id_inastk !== '') ? " AND pi.ID_INASTK = '$id_inastk'" : "";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_add_pengobatan_inastk($no_medrec, $tanggal, $id_poli, $id_inastk, $jmlobat, $signa1, $signa2, $signa3, $bentuk, $sediaan)
	{
		$id_dokter = $this->session->userdata('userid');
		
		$data = array(
				'NO_MEDREC'     => $no_medrec,
				'TGL_KUNJUNGAN' => $tanggal,
				'ID_POLI'       => $id_poli,
				'ID_INASTK'     => $id_inastk,
				'DOKTER'        => $id_dokter,
				'JMLOBAT'       => $jmlobat,
				'SIGNA1'        => $signa1,
				'SIGNA2'        => $signa2,
				'SIGNA3'        => $signa3,
				'BENTUK'        => $bentuk,
				'SEDIAAN'       => $sediaan
			);

		$query = $this->db->insert('PENGOBATAN_INASTK', $data);
		return $query;
	}

	function pasien_edit_pengobatan_inastk($no_medrec, $tanggal, $id_poli, $id_inastk, $jmlobat, $signa1, $signa2, $signa3, $bentuk, $sediaan, $id_inastk_lama)
	{
		$id_dokter = $this->session->userdata('userid');
		
		$data = array(
				'ID_INASTK' => $id_inastk,
				'DOKTER'    => $id_dokter,
				'JMLOBAT'   => $jmlobat,
				'SIGNA1'    => $signa1,
				'SIGNA2'    => $signa2,
				'SIGNA3'    => $signa3,
				'BENTUK'    => $bentuk,
				'SEDIAAN'   => $sediaan
			);

		$this->db->where('ID_INASTK',$id_inastk_lama);
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('PENGOBATAN_INASTK', $data);
		return $query;
	}

	function pasien_delete_pengobatan_inastk($no_medrec, $tanggal, $id_poli, $id_inastk)
	{
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$this->db->where('ID_INASTK', $id_inastk);

		$query = $this->db->delete('PENGOBATAN_INASTK');
		return $query;
	}
/*--/.PENGOBATAN INASTIK--*/


/*--DIAGNOSA--*/
	function check_data_diagnosa_utama($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT dp.* FROM DAFTAR_ULANG du, DIAGNOSA_PASIEN dp
				WHERE du.NO_MEDREC = dp.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = dp.TGL_KUNJUNGAN 
					AND du.ID_POLI = dp.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'
					AND dp.KLASIFIKASI = 'UTAMA'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_get_diagnosa($no_medrec, $tanggal, $id_poli, $diagnosa = '')
	{
		$sql = "SELECT dp.* FROM DAFTAR_ULANG du, DIAGNOSA_PASIEN dp
				WHERE du.NO_MEDREC = dp.NO_MEDREC 
					AND du.TGL_KUNJUNGAN = dp.TGL_KUNJUNGAN 
					AND du.ID_POLI = dp.ID_POLI 
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$sql .= ($diagnosa !== '') ? " AND dp.DIAGNOSA = '$diagnosa'" : '';
		$sql .= " ORDER BY dp.KLASIFIKASI DESC";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_add_diagnosa($no_medrec, $tanggal, $id_poli, $id_diagnosa, $klasifikasi)
	{
		$data = array(
				'NO_MEDREC'     => $no_medrec,
				'TGL_KUNJUNGAN' => $tanggal,
				'ID_POLI'       => $id_poli,
				'DIAGNOSA'      => $id_diagnosa,
				'KLASIFIKASI'   => $klasifikasi,
			);

		$query = $this->db->insert('DIAGNOSA_PASIEN', $data);
		return $query;
	}

	function pasien_edit_diagnosa($no_medrec, $tanggal, $id_poli, $id_diagnosa, $klasifikasi, $diagnosa_lama)
	{
		$data = array(
				'DIAGNOSA'    => $id_diagnosa,
				'KLASIFIKASI' => $klasifikasi,
			);

		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$this->db->where('DIAGNOSA', $diagnosa_lama);

		$query = $this->db->update('DIAGNOSA_PASIEN', $data);
		return $query;
	}

	function pasien_delete_diagnosa($no_medrec, $tanggal, $id_poli, $diagnosa)
	{
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$this->db->where('DIAGNOSA', $diagnosa);

		$query = $this->db->delete('DIAGNOSA_PASIEN');
		return $query;
	}
/*--/.DIAGNOSA--*/

/*-- FISIK --*/
	function pasien_get_fisik($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT f.* FROM FISIK_IRJ f, DAFTAR_ULANG du 
				WHERE f.NO_MEDREC = du.NO_MEDREC 
					AND f.TGL_KUNJUNGAN = du.TGL_KUNJUNGAN 
					AND f.ID_POLI = du.ID_POLI
					AND du.NO_MEDREC = '$no_medrec'
					AND du.TGL_KUNJUNGAN = '$tanggal'
					AND du.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_add_fisik_kesan_umum($no_medrec, $tanggal, $id_poli, $ku, $kesadaran, $gizi, $tekdar_sis, $tekdar_dias, $nadi, $tinggi, $berat, $lingkarkepala, $pernapasan, $suhu, $vas)
	{
		$id_dokter = $this->session->userdata('userid');

		$data = array(
				'NO_MEDREC'     => $no_medrec,
				'TGL_KUNJUNGAN' => $tanggal,
				'ID_POLI'       => $id_poli,
				'DOKTER'        => $id_dokter,
				'KU'            => $ku,
				'KESADARAN'     => $kesadaran,
				'GIZI'          => $gizi,
				'TEKDAR_SIS'    => $tekdar_sis,
				'TEKDAR_DIAS'   => $tekdar_dias,
				'NADI'          => $nadi,
				'TINGGI'        => $tinggi,
				'BERAT'         => $berat,
				'LINGKARKEPALA' => $lingkarkepala,
				'PERNAPASAN'    => $pernapasan,
				'SUHU'          => $suhu,
				'VAS'           => $vas,
			);

		$query = $this->db->insert('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_kesan_umum($no_medrec, $tanggal, $id_poli, $ku, $kesadaran, $gizi, $tekdar_sis, $tekdar_dias, $nadi, $tinggi, $berat, $lingkarkepala, $pernapasan, $suhu, $vas)
	{
		$id_dokter = $this->session->userdata('userid');

		$data = array(
				'DOKTER'        => $id_dokter,
				'KU'            => $ku,
				'KESADARAN'     => $kesadaran,
				'GIZI'          => $gizi,
				'TEKDAR_SIS'    => $tekdar_sis,
				'TEKDAR_DIAS'   => $tekdar_dias,
				'NADI'          => $nadi,
				'TINGGI'        => $tinggi,
				'BERAT'         => $berat,
				'LINGKARKEPALA' => $lingkarkepala,
				'PERNAPASAN'    => $pernapasan,
				'SUHU'          => $suhu,
				'VAS'           => $vas,
			);

		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_kepala($no_medrec, $tanggal, $id_poli, $bibir ,$bibir_ket ,$hidung_concha ,$hidung_ket ,$hidung_pch ,$hidung_sekret ,$hidung_septumdeviasi ,$kepala ,$kepala_ket ,$lidah ,$lidah_ket ,$mata_ket ,$mata_konjungtiva ,$mata_sklera ,$membrantympani_intak ,$telinga_cae ,$telinga_ket ,$telinga_pendengaran ,$telinga_sekret ,$tenggorokan_faring ,$tenggorokan_ket ,$tenggorokan_tonsil ,$tonsil_membesar)
	{
		$data = array(
				'BIBIR'                => $bibir,
				'BIBIR_KET'            => $bibir_ket,
				'HIDUNG_CONCHA'        => $hidung_concha,
				'HIDUNG_KET'           => $hidung_ket,
				'HIDUNG_PCH'           => $hidung_pch,
				'HIDUNG_SEKRET'        => $hidung_sekret,
				'HIDUNG_SEPTUMDEVIASI' => $hidung_septumdeviasi,
				'KEPALA'               => $kepala,
				'KEPALA_KET'           => $kepala_ket,
				'LIDAH'                => $lidah,
				'LIDAH_KET'            => $lidah_ket,
				'MATA_KET'             => $mata_ket,
				'MATA_KONJUNGTIVA'     => $mata_konjungtiva,
				'MATA_SKLERA'          => $mata_sklera,
				'MEMBRANTYMPANI_INTAK' => $membrantympani_intak,
				'TELINGA_CAE'          => $telinga_cae,
				'TELINGA_KET'          => $telinga_ket,
				'TELINGA_PENDENGARAN'  => $telinga_pendengaran,
				'TELINGA_SEKRET'       => $telinga_sekret,
				'TENGGOROKAN_FARING'   => $tenggorokan_faring,
				'TENGGOROKAN_KET'      => $tenggorokan_ket,
				'TENGGOROKAN_TONSIL'   => $tenggorokan_tonsil,
				'TONSIL_MEMBESAR'      => $tonsil_membesar,
			);

		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_leher($no_medrec, $tanggal, $id_poli, $leher_ket, $lhr_jvp, $lhr_jvp_ukuran, $lhr_kel_tiroid, $lhr_kgb, $lhr_kgb_banyak, $lhr_kgb_kltmrh, $lhr_kgb_kons, $lhr_kgb_lokasi, $lhr_kgb_mobille, $lhr_kgb_nyeritekan, $lhr_kgb_ukuran, $lhr_tiroid, $lhr_tiroid_brui, $lhr_tiroid_kons, $lhr_trachea, $lhr_trachea_dev)
	{
		$data = array(
				'LEHER_KET'          => $leher_ket ,
				'LHR_JVP'            => $lhr_jvp ,
				'LHR_JVP_UKURAN'     => $lhr_jvp_ukuran ,
				'LHR_KEL_TIROID'     => $lhr_kel_tiroid ,
				'LHR_KGB'            => $lhr_kgb ,
				'LHR_KGB_BANYAK'     => $lhr_kgb_banyak ,
				'LHR_KGB_KLTMRH'     => $lhr_kgb_kltmrh ,
				'LHR_KGB_KONS'       => $lhr_kgb_kons ,
				'LHR_KGB_LOKASI'     => $lhr_kgb_lokasi ,
				'LHR_KGB_MOBILLE'    => $lhr_kgb_mobille ,
				'LHR_KGB_NYERITEKAN' => $lhr_kgb_nyeritekan ,
				'LHR_KGB_UKURAN'     => $lhr_kgb_ukuran ,
				'LHR_TIROID'         => $lhr_tiroid ,
				'LHR_TIROID_BRUI'    => $lhr_tiroid_brui ,
				'LHR_TIROID_KONS'    => $lhr_tiroid_kons ,
				'LHR_TRACHEA'        => $lhr_trachea ,
				'LHR_TRACHEA_DEV'    => $lhr_trachea_dev ,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_mammae($no_medrec, $tanggal, $id_poli, $mammae_ket, $mammae_klt_merah, $mammae_klt_orange, $mammae_massa, $mammae_massa_bentuk, $mammae_massa_kons, $mammae_massa_lokasi_kiri, $mammae_massa_lokasi_knn, $mammae_massa_mobile, $mammae_massa_nyeri, $mammae_massa_uk_kiri, $mammae_massa_uk_knn, $mammae_papilla_retraks)
	{
		$data = array(
				'MAMMAE_KET'               => $mammae_ket,
				'MAMMAE_KLT_MERAH'         => $mammae_klt_merah,
				'MAMMAE_KLT_ORANGE'        => $mammae_klt_orange,
				'MAMMAE_MASSA'             => $mammae_massa,
				'MAMMAE_MASSA_BENTUK'      => $mammae_massa_bentuk,
				'MAMMAE_MASSA_KONS'        => $mammae_massa_kons,
				'MAMMAE_MASSA_LOKASI_KIRI' => $mammae_massa_lokasi_kiri,
				'MAMMAE_MASSA_LOKASI_KNN'  => $mammae_massa_lokasi_knn,
				'MAMMAE_MASSA_MOBILE'      => $mammae_massa_mobile,
				'MAMMAE_MASSA_NYERI'       => $mammae_massa_nyeri,
				'MAMMAE_MASSA_UK_KIRI'     => $mammae_massa_uk_kiri,
				'MAMMAE_MASSA_UK_KNN'      => $mammae_massa_uk_knn,
				'MAMMAE_PAPILLA_RETRAKSI'  => $mammae_papilla_retraks,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_thoraks($no_medrec, $tanggal, $id_poli, $batas_paru_hati ,$btsparuhati_ics ,$btsparuhati_peranjakan ,$dada_btk ,$dada_btk_lokasi ,$dada_grk ,$dada_ket ,$dada_massa_bentuk ,$dada_massa_kltmrh ,$dada_massa_kons ,$dada_massa_lokasi ,$dada_massa_mobille ,$dada_massa_nyeri ,$dada_massa_ukuran ,$dada_ms)
	{
		$data = array(
				'BATAS_PARU_HATI'        => $batas_paru_hati,
				'BTSPARUHATI_ICS'        => $btsparuhati_ics,
				'BTSPARUHATI_PERANJAKAN' => $btsparuhati_peranjakan,
				'DADA_BTK'               => $dada_btk,
				'DADA_BTK_LOKASI'        => $dada_btk_lokasi,
				'DADA_GRK'               => $dada_grk,
				'DADA_KET'               => $dada_ket,
				'DADA_MASSA_BENTUK'      => $dada_massa_bentuk,
				'DADA_MASSA_KLTMRH'      => $dada_massa_kltmrh,
				'DADA_MASSA_KONS'        => $dada_massa_kons,
				'DADA_MASSA_LOKASI'      => $dada_massa_lokasi,
				'DADA_MASSA_MOBILLE'     => $dada_massa_mobille,
				'DADA_MASSA_NYERI'       => $dada_massa_nyeri,
				'DADA_MASSA_UKURAN'      => $dada_massa_ukuran,
				'DADA_MSP'               => $dada_ms,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_paru($no_medrec, $tanggal, $id_poli, $paru_ket ,$paru_ronki ,$paru_ronki_ket ,$paru_suara ,$paru_suaranafas ,$paru_vokalfremitus ,$paru_vokalfremitus_ket ,$paru_vokalresonans ,$paru_vokalresonans_ket)
	{
		$data = array(
				'PARU_KET'               => $paru_ket,
				'PARU_RONKI'             => $paru_ronki,
				'PARU_RONKI_KET'         => $paru_ronki_ket,
				'PARU_SUARA'             => $paru_suara,
				'PARU_SUARANAFAS'        => $paru_suaranafas,
				'PARU_VOKALFREMITUS'     => $paru_vokalfremitus,
				'PARU_VOKALFREMITUS_KET' => $paru_vokalfremitus_ket,
				'PARU_VOKALRESONANS'     => $paru_vokalresonans,
				'PARU_VOKALRESONANS_KET' => $paru_vokalresonans_ket,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_jantung($no_medrec, $tanggal, $id_poli, $jantung_aordias_grade, $jantung_aordias_ket, $jantung_aorsis_grade, $jantung_aorsis_ket, $jantung_aorsis_menjalar, $jantung_aorta, $jantung_aorta_diastolik, $jantung_aorta_sistolik, $jantung_batas_atas, $jantung_batas_kanan, $jantung_batas_ket, $jantung_batas_kiri, $jantung_bising_ket, $jantung_ictcrds, $jantung_ictcrds_plus, $jantung_lokasilain_bising, $jantung_midias_grade, $jantung_midias_ket, $jantung_misis_grade, $jantung_misis_ket, $jantung_misis_menjalar, $jantung_mitral, $jantung_mitral_diastolik, $jantung_mitral_sistolik, $jantung_puldias_grade, $jantung_puldias_ket, $jantung_pulmonal, $jantung_pulmonal_dias, $jantung_pulmonal_sistolik, $jantung_pulsis_grade, $jantung_pulsis_ket, $jantung_pulsis_menjalar, $jantung_tridias_grade, $jantung_tridias_ket, $jantung_trikuspid, $jantung_trikuspid_diastolik, $jantung_trikuspid_sistoli, $jantung_trisis_grade, $jantung_trisis_ket, $jantung_trisis_menjalar, $jantung_ukura)
	{
		$data = array(
				'JANTUNG_AORDIAS_GRADE'       => $jantung_aordias_grade,
				'JANTUNG_AORDIAS_KET'         => $jantung_aordias_ket,
				'JANTUNG_AORSIS_GRADE'        => $jantung_aorsis_grade,
				'JANTUNG_AORSIS_KET'          => $jantung_aorsis_ket,
				'JANTUNG_AORSIS_MENJALAR'     => $jantung_aorsis_menjalar,
				'JANTUNG_AORTA'               => $jantung_aorta,
				'JANTUNG_AORTA_DIASTOLIK'     => $jantung_aorta_diastolik,
				'JANTUNG_AORTA_SISTOLIK'      => $jantung_aorta_sistolik,
				'JANTUNG_BATAS_ATAS'          => $jantung_batas_atas,
				'JANTUNG_BATAS_KANAN'         => $jantung_batas_kanan,
				'JANTUNG_BATAS_KET'           => $jantung_batas_ket,
				'JANTUNG_BATAS_KIRI'          => $jantung_batas_kiri,
				'JANTUNG_BISING_KET'          => $jantung_bising_ket,
				'JANTUNG_ICTCRDS'             => $jantung_ictcrds,
				'JANTUNG_ICTCRDS_PLUS'        => $jantung_ictcrds_plus,
				'JANTUNG_LOKASILAIN_BISING'   => $jantung_lokasilain_bising,
				'JANTUNG_MIDIAS_GRADE'        => $jantung_midias_grade,
				'JANTUNG_MIDIAS_KET'          => $jantung_midias_ket,
				'JANTUNG_MISIS_GRADE'         => $jantung_misis_grade,
				'JANTUNG_MISIS_KET'           => $jantung_misis_ket,
				'JANTUNG_MISIS_MENJALAR'      => $jantung_misis_menjalar,
				'JANTUNG_MITRAL'              => $jantung_mitral,
				'JANTUNG_MITRAL_DIASTOLIK'    => $jantung_mitral_diastolik,
				'JANTUNG_MITRAL_SISTOLIK'     => $jantung_mitral_sistolik,
				'JANTUNG_PULDIAS_GRADE'       => $jantung_puldias_grade,
				'JANTUNG_PULDIAS_KET'         => $jantung_puldias_ket,
				'JANTUNG_PULMONAL'            => $jantung_pulmonal,
				'JANTUNG_PULMONAL_DIAS'       => $jantung_pulmonal_dias,
				'JANTUNG_PULMONAL_SISTOLIK'   => $jantung_pulmonal_sistolik,
				'JANTUNG_PULSIS_GRADE'        => $jantung_pulsis_grade,
				'JANTUNG_PULSIS_KET'          => $jantung_pulsis_ket,
				'JANTUNG_PULSIS_MENJALAR'     => $jantung_pulsis_menjalar,
				'JANTUNG_TRIDIAS_GRADE'       => $jantung_tridias_grade,
				'JANTUNG_TRIDIAS_KET'         => $jantung_tridias_ket,
				'JANTUNG_TRIKUSPID'           => $jantung_trikuspid,
				'JANTUNG_TRIKUSPID_DIASTOLIK' => $jantung_trikuspid_diastolik,
				'JANTUNG_TRIKUSPID_SISTOLIK'  => $jantung_trikuspid_sistoli,
				'JANTUNG_TRISIS_GRADE'        => $jantung_trisis_grade,
				'JANTUNG_TRISIS_KET'          => $jantung_trisis_ket,
				'JANTUNG_TRISIS_MENJALAR'     => $jantung_trisis_menjalar,
				'JANTUNG_UKURAN'              => $jantung_ukura,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_abdomen($no_medrec, $tanggal, $id_poli, $abdomen ,$abd_hepar ,$abd_hepar_bac ,$abd_hepar_bpx ,$abd_hepar_konsistensi ,$abd_hepar_muka_brui ,$abd_hepar_permukaan ,$abd_hepar_tepi ,$abd_konsistensi ,$abd_lainlain ,$abd_lien ,$abd_lien_kons ,$abd_lien_teraba ,$abd_massa ,$abd_massa_bentuk ,$abd_massa_kltmrh ,$abd_massa_kons ,$abd_massa_lokasi ,$abd_massa_mobille ,$abd_massa_nyeri ,$abd_massa_ukuran ,$abd_nyerilepas ,$abd_nyerilepas_lokasi ,$abd_nyeritekan_lokasi ,$abd_nyeri_tekan ,$abd_refferedpain ,$abd_refferedpain_lokasi ,$abd__hepar_nyeritekan, $abd_vesikaurinaria_teraba, $abd_ginjal_nyeriketok )
	{
		$data = array(
			'ABDOMEN'                   => $abdomen,
			'ABD_HEPAR'                 => $abd_hepar,
			'ABD_HEPAR_BAC'             => $abd_hepar_bac,
			'ABD_HEPAR_BPX'             => $abd_hepar_bpx,
			'ABD_HEPAR_KONSISTENSI'     => $abd_hepar_konsistensi,
			'ABD_HEPAR_MUKA_BRUI'       => $abd_hepar_muka_brui,
			'ABD_HEPAR_PERMUKAAN'       => $abd_hepar_permukaan,
			'ABD_HEPAR_TEPI'            => $abd_hepar_tepi,
			'ABD_KONSISTENSI'           => $abd_konsistensi,
			'ABD_LAINLAIN'              => $abd_lainlain,
			'ABD_LIEN'                  => $abd_lien,
			'ABD_LIEN_KONS'             => $abd_lien_kons,
			'ABD_LIEN_TERABA'           => $abd_lien_teraba,
			'ABD_MASSA'                 => $abd_massa,
			'ABD_MASSA_BENTUK'          => $abd_massa_bentuk,
			'ABD_MASSA_KLTMRH'          => $abd_massa_kltmrh,
			'ABD_MASSA_KONS'            => $abd_massa_kons,
			'ABD_MASSA_LOKASI'          => $abd_massa_lokasi,
			'ABD_MASSA_MOBILLE'         => $abd_massa_mobille,
			'ABD_MASSA_NYERI'           => $abd_massa_nyeri,
			'ABD_MASSA_UKURAN'          => $abd_massa_ukuran,
			'ABD_NYERILEPAS'            => $abd_nyerilepas,
			'ABD_NYERILEPAS_LOKASI'     => $abd_nyerilepas_lokasi,
			'ABD_NYERITEKAN_LOKASI'     => $abd_nyeritekan_lokasi,
			'ABD_NYERI_TEKAN'           => $abd_nyeri_tekan,
			'ABD_REFFEREDPAIN'          => $abd_refferedpain,
			'ABD_REFFEREDPAIN_LOKASI'   => $abd_refferedpain_lokasi,
			'ABD__HEPAR_NYERITEKAN'     => $abd__hepar_nyeritekan,
			'ABD_VESIKAURINARIA_TERABA' => $abd_vesikaurinaria_teraba,
			'ABD_GINJAL_NYERIKETOK'     => $abd_ginjal_nyeriketok,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_genitalia($no_medrec, $tanggal, $id_poli, $genitalia_hemorroid,$genitalia_hemorroid_lokasi ,$genitalia_hernia ,$genitalia_hernia_lokasi ,$genitalia_hidrocel ,$genitalia_hidrocel_lokasi ,$genitalia_ket ,$genitalia_ulcer ,$genitalia_ulcer_lokasi)
	{
		$data = array(
				'GENITALIA_HEMORROID'        => $genitalia_hemorroid,
				'GENITALIA_HEMORROID_LOKASI' => $genitalia_hemorroid_lokasi,
				'GENITALIA_HERNIA'           => $genitalia_hernia,
				'GENITALIA_HERNIA_LOKASI'    => $genitalia_hernia_lokasi,
				'GENITALIA_HIDROCEL'         => $genitalia_hidrocel,
				'GENITALIA_HIDROCEL_LOKASI'  => $genitalia_hidrocel_lokasi,
				'GENITALIA_KET'              => $genitalia_ket,
				'GENITALIA_ULCER'            => $genitalia_ulcer,
				'GENITALIA_ULCER_LOKASI'     => $genitalia_ulcer_lokasi,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_ektremitas($no_medrec, $tanggal, $id_poli, $ekstremitas_clubbing ,$ekstremitas_clubbing_lokasi ,$ekstremitas_edema_lokasi ,$ekstremitas_fraktur ,$ekstremitas_fraktur_ket ,$ekstremitas_fraktur_lokasi ,$ekstremitas_tremor ,$ekstremitas_tremor_lokasi ,$ekstremitas_varices ,$ekstremitas_varices_lokasi ,$extremitas_bwh_idema ,$extremitas_bwh_ket)
	{
		$data = array(
				'EKSTREMITAS_CLUBBING'        => $ekstremitas_clubbing,
				'EKSTREMITAS_CLUBBING_LOKASI' => $ekstremitas_clubbing_lokasi,
				'EKSTREMITAS_EDEMA_LOKASI'    => $ekstremitas_edema_lokasi,
				'EKSTREMITAS_FRAKTUR'         => $ekstremitas_fraktur,
				'EKSTREMITAS_FRAKTUR_KET'     => $ekstremitas_fraktur_ket,
				'EKSTREMITAS_FRAKTUR_LOKASI'  => $ekstremitas_fraktur_lokasi,
				'EKSTREMITAS_TREMOR'          => $ekstremitas_tremor,
				'EKSTREMITAS_TREMOR_LOKASI'   => $ekstremitas_tremor_lokasi,
				'EKSTREMITAS_VARICES'         => $ekstremitas_varices,
				'EKSTREMITAS_VARICES_LOKASI'  => $ekstremitas_varices_lokasi,
				'EXTREMITAS_BWH_IDEMA'        => $extremitas_bwh_idema,
				'EXTREMITAS_BWH_KET '          => $extremitas_bwh_ket,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

	function pasien_edit_fisik_neorologis($no_medrec, $tanggal, $id_poli, $neurologis_clubbing,$neurologis_clubbing_lokasi,$neurologis_tremor,$neurologis_tremor_lokasi,$neurologis_ket,$refleks_apr,$refleks_biceps,$refleks_ket,$refleks_kp)
	{
		$data = array(
				'NEUROLOGIS_CLUBBING'        => $neurologis_clubbing,
				'NEUROLOGIS_CLUBBING_LOKASI' => $neurologis_clubbing_lokasi,
				'NEUROLOGIS_TREMOR'          => $neurologis_tremor,
				'NEUROLOGIS_TREMOR_LOKASI'   => $neurologis_tremor_lokasi,
				'REFLEKS_APR'                => $refleks_apr,
				'REFLEKS_BICEPS'             => $refleks_biceps,
				'REFLEKS_KET'                => $refleks_ket,
				'REFLEKS_KPR'                => $refleks_kp,
				'NEUROLOGIS_KET'             => $neurologis_ket,
			);
		
		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);

		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}
/*-- /.FISIK --*/

/*-- PENUNJANG --*/
	function pasien_get_penunjang($no_medrec, $tanggal, $id_poli, $type = '')
	{
		$stack = array();
		$sql = "SELECT tp.ID_JNS_LAYANAN FROM TRANSAKSI_PENUNJANG tp, JENIS_PELAYANAN jp";
		$sql .= " WHERE tp.ID_JNS_LAYANAN = jp.ID_JNS_LAYANAN";
		$sql .= " AND tp.NO_MEDREC = '$no_medrec'";
		$sql .= " AND tp.TGL_KUNJUNGAN = '$tanggal'";
		$sql .= " AND tp.POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		foreach($query as $key=>$value){
			array_push($stack, $value['ID_JNS_LAYANAN']);
		}
		return $stack;
	}

	function pasien_get_penunjang_content($content)
	{
		$sql = "SELECT * FROM JENIS_PELAYANAN
				WHERE SUBPOKLAYAN like '%$content%' 
				ORDER BY NM_LAYANAN";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_delete_penunjang_content($no_medrec, $tgl, $poli, $content)
	{
		$this->db->where('NO_MEDREC', $no_medrec);
		$this->db->where('TGL_KUNJUNGAN', $tgl);
		$this->db->where('POLI', $poli);
		$this->db->where('ID_JNS_LAYANAN', $content);
		$query = $this->db->delete('TRANSAKSI_PENUNJANG');
		return $query;
	}

	function pasien_save_penunjang_content($no_medrec, $tgl, $poli, $content)
	{
		$data = array(
				'NO_MEDREC' => $no_medrec,
				'TGL_KUNJUNGAN' => $tgl,
				'POLI' => $poli,
				'ID_JNS_LAYANAN' => $content,
			);
		$query = $this->db->insert('TRANSAKSI_PENUNJANG',$data);
		return $query;
	}
/**-- /.PENUNJANG --*/

/**-- ASUHAN KEPERAWATAN --*/
	function pasien_get_asuhan_keperawatan($no_medrec, $tgl, $poli)
	{
		$sql = "SELECT PI.*, DU.*, PIR.* FROM PSIKOSOSIAL_IRJ PI, DAFTAR_ULANG DU, PASIEN_IRJ PIR
				WHERE DU.NO_MEDREC = PI.NO_MEDREC
					AND DU.TGL_KUNJUNGAN = PI.TGL_KUNJUNGAN
					AND DU.ID_POLI = PI.ID_POLI
					AND DU.NO_MEDREC = PIR.NO_MEDREC
				  	AND PI.NO_MEDREC = PIR.NO_MEDREC
				  	AND DU.NO_MEDREC = '$no_medrec'
				  	AND DU.TGL_KUNJUNGAN = '$tgl'
				  	AND DU.ID_POLI = '$poli'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function pasien_add_asuhan_keperawatan($no_medrec, $id_poli, $tanggal, $bahasa1, $bahasa2, $bahasa3, $bahasa_isyarat, $bicara, $bicara_gangguan, $bicara_harian, $cara_bljr1, $cara_bljr2, $cara_bljr3, $cara_bljr4, $cara_bljr5, $hambatan_bljr, $hambatan_bljr1, $hambatan_bljr2, $hambatan_bljr3, $hambatan_bljr4, $hambatan_bljr5, $hambatan_bljr6, $hambatan_bljr7, $hambatan_bljr8, $kebiasaan1, $kebiasaan2, $kebiasaan3, $keb_pembelajaran1, $keb_pembelajaran2, $keb_pembelajaran3, $keb_pembelajaran4, $keb_pembelajaran5, $penterjemah, $status_tinggal)
	{
		$data  = array(
				'NO_MEDREC'         => $no_medrec,
				'TGL_KUNJUNGAN'     => $tanggal,
				'ID_POLI'           => $id_poli,
				'BAHASA1'           => ($bahasa1) ? $bahasa1 : 'T',
				'BAHASA2'           => ($bahasa2) ? $bahasa2 : 'T',
				'BAHASA3'           => ($bahasa3) ? $bahasa3 : 'T',
				'BAHASA_ISYARAT'    => $bahasa_isyarat,
				'BICARA'            => $bicara,
				'BICARA_GANGGUAN'   => $bicara_gangguan,
				'BAHASA_HARIAN'     => $bicara_harian,
				'CARA_BLJR1'        => ($cara_bljr1) ? $cara_bljr1 : 'T',
				'CARA_BLJR2'        => ($cara_bljr2) ? $cara_bljr2 : 'T',
				'CARA_BLJR3'        => ($cara_bljr3) ? $cara_bljr3 : 'T',
				'CARA_BLJR4'        => ($cara_bljr4) ? $cara_bljr4 : 'T',
				'CARA_BLJR5'        => $cara_bljr5,
				'HAMBATAN_BLJR'     => $hambatan_bljr,
				'HAMBATAN_BLJR1'    => ($hambatan_bljr1) ? $hambatan_bljr1 : 'T',
				'HAMBATAN_BLJR2'    => ($hambatan_bljr2) ? $hambatan_bljr2 : 'T',
				'HAMBATAN_BLJR3'    => ($hambatan_bljr3) ? $hambatan_bljr3 : 'T',
				'HAMBATAN_BLJR4'    => ($hambatan_bljr4) ? $hambatan_bljr4 : 'T',
				'HAMBATAN_BLJR5'    => ($hambatan_bljr5) ? $hambatan_bljr5 : 'T',
				'HAMBATAN_BLJR6'    => ($hambatan_bljr6) ? $hambatan_bljr6 : 'T',
				'HAMBATAN_BLJR7'    => ($hambatan_bljr7) ? $hambatan_bljr7 : 'T',
				'HAMBATAN_BLJR8'    => ($hambatan_bljr8) ? $hambatan_bljr8 : 'T',
				'KEBIASAAN1'        => ($kebiasaan1) ? $kebiasaan1 : 'T',
				'KEBIASAAN2'        => ($kebiasaan2) ? $kebiasaan2 : 'T',
				'KEBIASAAN3'        => $kebiasaan3,
				'KEB_PEMBELAJARAN1' => ($keb_pembelajaran1) ? $keb_pembelajaran1 : 'T',
				'KEB_PEMBELAJARAN2' => ($keb_pembelajaran2) ? $keb_pembelajaran2 : 'T',
				'KEB_PEMBELAJARAN3' => ($keb_pembelajaran3) ? $keb_pembelajaran3 : 'T',
				'KEB_PEMBELAJARAN4' => ($keb_pembelajaran4) ? $keb_pembelajaran4 : 'T',
				'KEB_PEMBELAJARAN5' => $keb_pembelajaran5,
				'PENTERJEMAH'       => $penterjemah,
				'STATUS_TINGGAL'    => $status_tinggal,
			);
		$query = $this->db->insert('PSIKOSOSIAL_IRJ', $data);
		return $query;
	}

	function pasien_edit_asuhan_keperawatan($no_medrec, $id_poli, $tanggal, $bahasa1, $bahasa2, $bahasa3, $bahasa_isyarat, $bicara, $bicara_gangguan, $bicara_harian, $cara_bljr1, $cara_bljr2, $cara_bljr3, $cara_bljr4, $cara_bljr5, $hambatan_bljr, $hambatan_bljr1, $hambatan_bljr2, $hambatan_bljr3, $hambatan_bljr4, $hambatan_bljr5, $hambatan_bljr6, $hambatan_bljr7, $hambatan_bljr8, $kebiasaan1, $kebiasaan2, $kebiasaan3, $keb_pembelajaran1, $keb_pembelajaran2, $keb_pembelajaran3, $keb_pembelajaran4, $keb_pembelajaran5, $penterjemah, $status_tinggal)
	{
		$data  = array(
				'BAHASA1'           => ($bahasa1) ? $bahasa1 : 'T',
				'BAHASA2'           => ($bahasa2) ? $bahasa2 : 'T',
				'BAHASA3'           => ($bahasa3) ? $bahasa3 : 'T',
				'BAHASA_ISYARAT'    => $bahasa_isyarat,
				'BICARA'            => $bicara,
				'BICARA_GANGGUAN'   => $bicara_gangguan,
				'BAHASA_HARIAN'     => $bicara_harian,
				'CARA_BLJR1'        => ($cara_bljr1) ? $cara_bljr1 : 'T',
				'CARA_BLJR2'        => ($cara_bljr2) ? $cara_bljr2 : 'T',
				'CARA_BLJR3'        => ($cara_bljr3) ? $cara_bljr3 : 'T',
				'CARA_BLJR4'        => ($cara_bljr4) ? $cara_bljr4 : 'T',
				'CARA_BLJR5'        => $cara_bljr5,
				'HAMBATAN_BLJR'     => $hambatan_bljr,
				'HAMBATAN_BLJR1'    => ($hambatan_bljr1) ? $hambatan_bljr1 : 'T',
				'HAMBATAN_BLJR2'    => ($hambatan_bljr2) ? $hambatan_bljr2 : 'T',
				'HAMBATAN_BLJR3'    => ($hambatan_bljr3) ? $hambatan_bljr3 : 'T',
				'HAMBATAN_BLJR4'    => ($hambatan_bljr4) ? $hambatan_bljr4 : 'T',
				'HAMBATAN_BLJR5'    => ($hambatan_bljr5) ? $hambatan_bljr5 : 'T',
				'HAMBATAN_BLJR6'    => ($hambatan_bljr6) ? $hambatan_bljr6 : 'T',
				'HAMBATAN_BLJR7'    => ($hambatan_bljr7) ? $hambatan_bljr7 : 'T',
				'HAMBATAN_BLJR8'    => ($hambatan_bljr8) ? $hambatan_bljr8 : 'T',
				'KEBIASAAN1'        => ($kebiasaan1) ? $kebiasaan1 : 'T',
				'KEBIASAAN2'        => ($kebiasaan2) ? $kebiasaan2 : 'T',
				'KEBIASAAN3'        => $kebiasaan3,
				'KEB_PEMBELAJARAN1' => ($keb_pembelajaran1) ? $keb_pembelajaran1 : 'T',
				'KEB_PEMBELAJARAN2' => ($keb_pembelajaran2) ? $keb_pembelajaran2 : 'T',
				'KEB_PEMBELAJARAN3' => ($keb_pembelajaran3) ? $keb_pembelajaran3 : 'T',
				'KEB_PEMBELAJARAN4' => ($keb_pembelajaran4) ? $keb_pembelajaran4 : 'T',
				'KEB_PEMBELAJARAN5' => $keb_pembelajaran5,
				'PENTERJEMAH'       => $penterjemah,
				'STATUS_TINGGAL'    => $status_tinggal,
			);

		$this->db->where('NO_MEDREC',$no_medrec);
		$this->db->where('TGL_KUNJUNGAN',$tanggal);
		$this->db->where('ID_POLI',$id_poli);
		$query = $this->db->update('PSIKOSOSIAL_IRJ', $data);
		return $query;
	}

	function pasien_get_diposisi()
	{
		$query = false;
		return $query;
	}
/**-- /.ASUHAN KEPERAWATAN --*/
}
