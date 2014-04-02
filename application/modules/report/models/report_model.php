<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model {

/* base biodata */
	function report_base_biodata($no_medrec)
	{
		$sql = "SELECT * FROM PASIEN_IRJ
				WHERE NO_MEDREC = '$no_medrec'";

		$query  = $this->db->query($sql)->result_array();
		return $query;
	}

/*
 * daftar ulang 
 *-------------------------------
 * belum menyertakan nama dokter yang menangani, karena id_dokter sering tidak diisi
 */

	function report_get_daftar_ulang($no_medrec)
	{
		$sql = "SELECT A.NO_MEDREC, 
					   B.TGL_KUNJUNGAN,
					   B.ID_DOKTER, 
					   C.NM_POLI, 
					   B.NO_DOK_POLI,
					   E.NM_DIAGNOSA, 
					   D.DIAGNOSA, 
					   D.KLASIFIKASI, 
					   F.ID_INASTK, 
					   F.JMLOBAT, 
					   F.SIGNA2, 
					   F.SIGNA1, 
					   G.NAMA_OBAT
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, POLIKLINIK C, DIAGNOSA_PASIEN D, ICD1 E, PENGOBATAN_INASTK F, INASTKRSHS G
				WHERE A.NO_MEDREC = B.NO_MEDREC AND
					  B.ID_POLI = C.ID_POLI AND
					  B.NO_MEDREC = D.NO_MEDREC AND
					  B.TGL_KUNJUNGAN = D.TGL_KUNJUNGAN AND
					  B.ID_POLI = D.ID_POLI AND
					  D.DIAGNOSA = E.ID_ICD AND
					  B.NO_MEDREC = F.NO_MEDREC AND
					  B.TGL_KUNJUNGAN = F.TGL_KUNJUNGAN AND
					  B.ID_POLI = F.ID_POLI AND
					  F.ID_INASTK = G.ID_OBAT AND
					  A.NO_MEDREC = '$no_medrec'
				ORDER BY B.TGL_KUNJUNGAN DESC";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/* detail mini pasien */
	function report_mini_detail_pasien($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT A.NAMA, 
					   A.NO_MEDREC, 
					   A.TGL_LAHIR, 
					   A.SEX, 
					   B.ID_POLI, 
					   B.TGL_KUNJUNGAN, 
					   D.NM_DOKTER, 
					   C.NM_POLI, 
					   A.NOTLP, 
					   A.NO_TLP_HP, 
					   B.CARA_BAYAR, 
					   B.ID_DOKTER, 
					   E.CATATAN, 
					   G.NM_DIAGNOSA
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, POLIKLINIK C, DATA_DOKTER D, CATATAN_IRJ E, DIAGNOSA_PASIEN F, ICD1 G
				WHERE A.NO_MEDREC = B.NO_MEDREC 
					AND B.NO_MEDREC = E.NO_MEDREC 
					AND B.ID_POLI = C.ID_POLI 
					AND B.ID_POLI = E.ID_POLI 
					AND B.TGL_KUNJUNGAN = E.TGL_KUNJUNGAN 
					AND B.ID_DOKTER = D.ID_DOKTER 
					AND B.NO_MEDREC = F.NO_MEDREC
					AND B.ID_POLI = F.ID_POLI
					AND B.TGL_KUNJUNGAN = F.TGL_KUNJUNGAN
					AND F.DIAGNOSA = G.ID_ICD
					AND A.NO_MEDREC = '$no_medrec'
					AND B.TGL_KUNJUNGAN = '$tanggal'
					AND B.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/* anamnesa */
	function report_get_anamnesa_pasien($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT A.NAMA, 
					   A.NO_MEDREC,
					   A.UMUR, 
					   A.TGL_LAHIR,
					   B.TGL_KUNJUNGAN,
					   B.ID_POLI, 
					   B.ID_DOKTER, 
					   C.NM_POLI, 
					   E.SUMBER, 
					   E.KELUHAN_UTAMA, 
					   E.ANAMNESA, 
					   E.PASIEN_ILLNES, 
					   E.RIWAYAT_PENYAKIT, 
					   E.RIWAYAT_PENYAKIT_KELUARGA, 
					   F.KU, 
					   F.KESADARAN, 
					   F.GIZI, 
					   F.TINGGI, 
					   F.BERAT, 
					   F.LINGKARKEPALA, 
					   F.SUHU, 
					   F.NADI, 
					   F.PERNAPASAN, 
					   F.TEKDAR_SIS, 
					   F.TEKDAR_DIAS, 
					   F.KETERANGAN, 
					   F.VAS, 
					   A.SEX, 
					   A.NOTLP, 
					   B.CARA_BAYAR, 
					   G.DIAGNOSA, 
					   H.NM_DIAGNOSA
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, POLIKLINIK C, ANAMNESA_IRJ E, FISIK_IRJ F, DIAGNOSA_PASIEN G, ICD1 H
				WHERE A.NO_MEDREC = B.NO_MEDREC 
					AND B.ID_POLI = C.ID_POLI 
					AND B.NO_MEDREC = E.NO_MEDREC 
					AND B.ID_POLI = E.ID_POLI 
					AND B.TGL_KUNJUNGAN = E.TGL_KUNJUNGAN 
					AND B.NO_MEDREC = F.NO_MEDREC
					AND B.TGL_KUNJUNGAN = F.TGL_KUNJUNGAN
					AND B.ID_POLI = F.ID_POLI
					AND B.NO_MEDREC = G.NO_MEDREC
					AND B.ID_POLI = G.ID_POLI
					AND B.TGL_KUNJUNGAN = G.TGL_KUNJUNGAN
					AND G.DIAGNOSA = H.ID_ICD
					AND A.NO_MEDREC = '$no_medrec'
					AND B.TGL_KUNJUNGAN = '$tanggal'
					AND B.ID_POLI = '$id_poli'
				ORDER BY G.KLASIFIKASI DESC";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/* catatan khusus */
	function report_get_catatan_khusus($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT A.NAMA, 
					   A.NO_MEDREC, 
					   A.UMUR, 
					   A.SEX, 
					   B.ID_POLI, 
					   B.TGL_KUNJUNGAN, 
					   B.ID_DOKTER,
					   C.NM_POLI, 
					   A.NOTLP, 
					   B.CARA_BAYAR, 
					   E.CATATAN, 
					   G.NM_DIAGNOSA, 
					   F.DIAGNOSA
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, POLIKLINIK C, CATATAN_IRJ E, DIAGNOSA_PASIEN F, ICD1 G
				WHERE A.NO_MEDREC = B.NO_MEDREC 
					AND B.NO_MEDREC = E.NO_MEDREC 
					AND B.ID_POLI = C.ID_POLI 
					AND B.ID_POLI = E.ID_POLI 
					AND B.TGL_KUNJUNGAN = E.TGL_KUNJUNGAN 
					AND B.NO_MEDREC = F.NO_MEDREC
					AND B.ID_POLI = F.ID_POLI
					AND B.TGL_KUNJUNGAN = F.TGL_KUNJUNGAN
					AND F.DIAGNOSA = G.ID_ICD
					AND A.NO_MEDREC = '$no_medrec'
					AND B.TGL_KUNJUNGAN = '$tanggal'
					AND B.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/* prosedure */
	function report_get_prosedur($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT A.NAMA, 
					 A.NO_MEDREC, 
					 A.TGL_LAHIR, 
					 B.UMURRJ, 
					 B.UHARIIRJ, 
					 TO_CHAR(B.TGL_KUNJUNGAN,'DD-MM-YYYY') TGLMASUK, 
					 TO_CHAR(B.TGL_KUNJUNGAN,'DD-MM-YYYY') TGLKELUAR, 
					 (SUM(NVL(C.BIAYA_POLI,0)) + SUM(NVL(D.BIAYAOBATRJ,0))) BIAYATOTAL, 
					 B.TINDAKLANJUT, 
					 B.TGL_KUNJUNGAN, 
					 B.ID_POLI
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, PELAYANAN_POLI C, OBAT_IRJ D
				WHERE A.NO_MEDREC = B.NO_MEDREC 
					AND B.NO_MEDREC = C.NO_MEDREC 
					AND A.NO_MEDREC = C.NO_MEDREC 
					AND B.TGL_KUNJUNGAN = C.TGL_KUNJUNGAN 
					AND B.ID_POLI = C.ID_POLI 
					AND B.NO_MEDREC = D.NO_MEDREC
					AND B.ID_POLI = D.ID_POLI 
					AND B.TGL_KUNJUNGAN = D.TGL_KUNJUNGAN 
					AND B.NO_MEDREC = '0000000204'
					AND B.TGL_KUNJUNGAN = '01-APR-00'
					AND B.ID_POLI = 'PB01'
				GROUP BY A.NAMA, 
					 A.NO_MEDREC, 
					 A.TGL_LAHIR, 
					 B.UMURRJ, 
					 B.UHARIIRJ, 
					 TO_CHAR(B.TGL_KUNJUNGAN,'DD-MM-YYYY'), 
					 TO_CHAR(B.TGL_KUNJUNGAN,'DD-MM-YYYY'),
					 B.TINDAKLANJUT, 
					 B.TGL_KUNJUNGAN, 
					 B.ID_POLI";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function report_get_konsul($no_medrec, $tanggal, $id_poli, $id_konsul)
	{
		$sql = "SELECT A.NAMA, 
					A.NO_MEDREC, 
					A.UMUR, 
					A.SEX, 
					B.TGL_KUNJUNGAN, 
					C.NM_POLI, 
					E.ID_KONSUL,
					E.DR_PENGIRIM, 
					E.DR_PENERIMA, 
					E.DIAGNOSA, 
					E.ISI_KONSUL, 
					E.JAWABAN_KONSUL, 
					E.CAT_KHUSUS,
					E.ID_POLI2, 
					A.NOTLP, 
					B.CARA_BAYAR, 
					E.PROBLEM_KONSUL
				FROM
					PASIEN_IRJ A, DAFTAR_ULANG B, POLIKLINIK C, KONSUL_IRJ E
				WHERE
					A.NO_MEDREC = B.NO_MEDREC 
					AND B.NO_MEDREC = E.NO_MEDREC 
					AND B.ID_POLI = C.ID_POLI 
					AND B.ID_POLI = E.ID_POLI 
					AND B.TGL_KUNJUNGAN = E.TGL_KUNJUNGAN 
					AND A.NO_MEDREC = '$no_medrec'
					AND B.TGL_KUNJUNGAN = '$tanggal'
					AND B.ID_POLI = '$id_poli'
					AND E.ID_KONSUL = '$id_konsul'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function report_get_obat($no_medrec, $tanggal, $id_poli)
	{
		$sql = "SELECT A.NAMA, 
					A.TGL_LAHIR,
					A.SEX,
					B.ID_DOKTER,
					D.NM_POLI, 
					C.NO_MEDREC, 
					C.TGL_KUNJUNGAN, 
					C.ID_POLI, 
					B.ID_DOKTER, 
					F.NAMA_OBAT, 
					C.SEDIAAN, 
					C.BENTUK, 
					C.SIGNA1, 
					C.SIGNA2, 
					C.SIGNA3, 
					C.JMLOBAT, 
					A.NOTLP, 
					A.ALAMAT, 
					B.CARA_BAYAR,
					H.NM_DIAGNOSA, 
					G.DIAGNOSA
				FROM PASIEN_IRJ A, DAFTAR_ULANG B, PENGOBATAN_INASTK C, POLIKLINIK D, INASTKRSHS F, DIAGNOSA_PASIEN G, ICD1 H
				WHERE A.NO_MEDREC = B.NO_MEDREC 
					AND B.NO_MEDREC = C.NO_MEDREC 
					AND B.TGL_KUNJUNGAN = C.TGL_KUNJUNGAN 
					AND B.ID_POLI = C.ID_POLI 
					AND B.ID_POLI = D.ID_POLI 
					AND C.ID_INASTK = F.ID_OBAT 
					AND (C.SIGNA1 IS NOT NULL AND C.SIGNA2 IS NOT NULL) 
					AND B.NO_MEDREC = G.NO_MEDREC
					AND B.ID_POLI = G.ID_POLI
					AND B.TGL_KUNJUNGAN = G.TGL_KUNJUNGAN
					AND G.DIAGNOSA = H.ID_ICD
					AND A.NO_MEDREC = '$no_medrec'
					AND B.TGL_KUNJUNGAN = '$tanggal'
					AND B.ID_POLI = '$id_poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}
}

/* End of file report_model.php */
/* Location: ./application/modules/report/models/report_model.php */