<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addon_model extends CI_Model {

/*
|---------------------------------------------------------------------------------------
| drg =  nama layanan
|---------------------------------------------------------------------------------------
*/
	function addon_drg($id_drg = '')
	{
		$sql   = "SELECT * FROM DRG";
		$sql   .= ($id_drg !== '') ? " WHERE ID_DRG = '$id_drg'" : "";
		$sql   .= " ORDER BY NM_DRG";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function addon_poliklinik($id_poli = '')
	{
		$sql   = "SELECT * FROM POLIKLINIK";
		$sql   .= ($id_poli !== '' ) ? " WHERE ID_POLI = '$id_poli'" : "";
		$sql   .= " ORDER BY NM_POLI";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function addon_dokter($id_dokter = '')
	{
		$sql   = "SELECT * FROM DATA_DOKTER";
		$sql   .= ($id_dokter !== '') ? " WHERE ID_DOKTER = '$id_dokter'" : "";
		$sql   .= " ORDER BY NM_DOKTER";
		$query = $this->db->query($sql)->result_array();
		if(count($query) == 0){
			$query[0] = array('NM_DOKTER' => '');
		}
		return $query;
	}

	function addon_daerah($id_daerah = '')
	{
		$sql   = "SELECT * FROM DAERAH";
		$sql   .= ($id_daerah !== '') ? " WHERE ID_DAERAH = '$id_daerah'" : "";
		$sql   .= " ORDER BY ID_DAERAH";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| icd9cm = prosedur tindakan yang dilakukan
|----------------------------------------------------------------------------------
*/
	function addon_icd9cm($id_tindakan = '')
	{
		$sql   = "SELECT * FROM ICD9CM";
		$sql   .= ($id_tindakan !== '') ? " WHERE ID_TIND = '$id_tindakan'" : "";
		$sql   .= " ORDER BY NM_TINDAKAN";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| icd1 = diagnosa yang dialami pasien
|----------------------------------------------------------------------------------
*/
	function addon_icd1($id_icd = '')
	{
		$sql   = "SELECT * FROM ICD1";
		$sql   .= " WHERE ID NOT IN (0)";
		$sql   .= ($id_icd !== '') ? " AND ID_ICD = '$id_icd'" : "";
		$sql   .= " ORDER BY NM_DIAGNOSA";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| inastkrshs = daftar obat di rshs
|----------------------------------------------------------------------------------
*/
	function addon_inastkrshs($id_obat = '', $grup = '')
	{
		$grup = get_grup_obat($grup);
		$sql  = "SELECT * FROM INASTKRSHS";

		switch ($grup) {
			case 'askes':
				$sql .= " WHERE SUBSTR(ID_OBAT,1,1) = 'A'";
				$sql .= ($id_obat !== '') ? " AND ID_OBAT = '$id_obat'" : "";
				break;

			case 'reguler':
				$sql .= " WHERE SUBSTR(ID_OBAT,1,1) != 'A'";
				$sql .= ($id_obat !== '') ? " AND ID_OBAT = '$id_obat'" : "";
				break;
			
			default:
				$sql .= ($id_obat !== '') ? " WHERE ID_OBAT = '$id_obat'" : "";
				break;
		}

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| signa1 = latin signa cara pemberian obat eg: 2 sendok makan 1 hari sekali
|----------------------------------------------------------------------------------
*/
	function addon_signa1($latinsigna = '')
	{
		$sql   = "SELECT * FROM SIGNA1";
		$sql   .= ($latinsigna !== '') ? " WHERE LATINSIGNA1 = '$latinsigna'" : "";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| signa2 = latin signa nama medium konsumsi obat eg: sendok makan
|----------------------------------------------------------------------------------
*/
	function addon_signa2($latinsigna = '')
	{
		$sql   = "SELECT * FROM SIGNA2";
		$sql   .= ($latinsigna !== '') ?" WHERE LATINSIGNA2 = '$latinsigna'" : "";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| signa3 = latin signa keterangan jenis obat eg: obat luar, injeksi
|----------------------------------------------------------------------------------
*/
	function addon_signa3($latinsigna = '')
	{
		$sql   = "SELECT * FROM SIGNA3";
		$sql   .= ($latinsigna !== '') ?" WHERE LATINSIGNA3 = '$latinsigna'" : "";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function addon_grup_tgl_kunjungan($no_medrec)
	{
		$sql = "SELECT count(*) JLH, TGL_KUNJUNGAN 
				FROM DAFTAR_ULANG 
				WHERE NO_MEDREC = '$no_medrec' 
				GROUP BY TGL_KUNJUNGAN
				ORDER BY TGL_KUNJUNGAN";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function addon_sequal_konsul_irj()
	{
		$sql   = "SELECT SEQ_KONSULIRJ.NEXTVAL FROM DUAL";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

/*
|----------------------------------------------------------------------------------
| cek_penerima konsul = memeriksa apakah field penerima kosong atau
| penerima sama dengan pengirim request
|----------------------------------------------------------------------------------
*/
	function cek_kirim_terima_to_current($kirim, $terima)
	{
		$id                  = $this->session->userdata('userid');
		$result['st_kirim']  = ($kirim == $id) ? 1 : 0;
		$result['st_terima'] = ($terima == $id) ? 1 : 0;
		return $result;
	} /** { 1 => 'sama', 0 => 'tidak sama'} **/

	function cek_isi_terima($dr_penerima, $jawaban)
	{
		$result = ($dr_penerima == '' OR $dr_penerima == null) ? 0 : 1;
		return $result;
	}

/*
|----------------------------------------------------------------------------------
| cek_penerima konsul = memeriksa apakah field penerima kosong atau
| penerima sama dengan pengirim request
|----------------------------------------------------------------------------------
*/

	function addon_save_koordinat($medrec, $tgl, $poli, $left, $right, $string)
	{
		// if( addon_clear_koordinat($no_medrec, $tgl, $poli) )
		// {
			$this->db->where('NO_MEDREC', $medrec);
			$this->db->where('TGL_KUNJUNGAN', $tgl);
			$this->db->where('ID_POLI', $poli);

			$str = '[';
			$str .= '{';
			$str .= '"left_pa" : "'.$left.'",';
			$str .= '"top_pa" : "'.$right.'",';
			$str .= '"string" : "'.$string.'"';
			$str .= '}';
			$str .= ']';

			$data_query = array('KOOR_TAG' => $str);
			$query = $this->db->update('FISIK_IRJ', $data_query);
			return $query;
		// }
	}

	function addon_load_koordinat($no_medrec, $tgl, $poli)
	{
		$sql = "SELECT KOOR_TAG FROM FISIK_IRJ
				WHERE NO_MEDREC = '$no_medrec'
				  AND TGL_KUNJUNGAN = '$tgl'
				  AND ID_POLI = '$poli'";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function addon_clear_koordinat($no_medrec, $tgl, $poli)
	{
		$this->db->where('NO_MEDREC', $no_medrec);
		$this->db->where('TGL_KUNJUNGAN', $tgl);
		$this->db->where('ID_POLI', $poli);

		$data = array('KOOR_TAG' => null);
		$query = $this->db->update('FISIK_IRJ', $data);
		return $query;
	}

}