<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graphics extends MX_Controller {

	public function index()
	{
		modules::run('login/is_logged_in');
		
		redirect(base_url().'graphics/graph.html');
	}

	public function graph()
	{
		$data['title']   = 'Grafik Kedatangan Pasien';
		$data['content'] = $this->load->view('graph','', true);
		$this->load->view('template_main', $data);
	}

	function get_rawat_jalan_query()
	{
		$sql = "SELECT TO_CHAR(TGL_KUNJUNGAN, 'DD') TGL, TO_CHAR(TGL_KUNJUNGAN, 'MM') BLN,count(*) JLH 
			    FROM DAFTAR_ULANG 
			    WHERE TGL_KUNJUNGAN >= '01-OCT-13' 
			    	AND TGL_KUNJUNGAN <= '31-OCT-13' 
			    GROUP BY TGL_KUNJUNGAN 
			    ORDER BY TGL_KUNJUNGAN";

		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function get_month($month, $year)
	{
	    for ($day=31; $day>=28; $day--) {
	        if (checkdate($month, $day, $year)) {
	            $end_date = $day;
	            break;
	        }
	    }

	    $bulan = date('M', mktime(0, 0, 0, $month+1, 0, 0));
		$hasil = array('bulan' => $bulan, 'end_date' => $end_date);
		return $hasil;
	}


	function get_rawat_jalan($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT TO_CHAR(TGL_KUNJUNGAN, 'DD') TGL, TO_CHAR(TGL_KUNJUNGAN, 'MM') BLN,count(*) JLH 
			    FROM DAFTAR_ULANG 
			    WHERE TGL_KUNJUNGAN >= '01-".$bulan."-".$tahun."' 
			    	AND TGL_KUNJUNGAN <= '".$end_date."-".$bulan."-".$tahun."'
			    GROUP BY TGL_KUNJUNGAN 
			    ORDER BY TGL_KUNJUNGAN";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_rawat_inap($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGL_MASUK, 'DD') TGL, to_char(TGL_MASUK, 'MM') BLN,count(*) JLH 
				FROM PASIEN_IRI 
				WHERE TGL_MASUK >= '01-".$bulan."-".$tahun."' 
					AND TGL_MASUK <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGL_MASUK 
				ORDER BY TGL_MASUK";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_rawat_darurat($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGLKUNJRD, 'DD') TGL, to_char(TGLKUNJRD, 'MM') BLN,count(*) JLH 
				FROM pasien_ird 
				WHERE TGLKUNJRD >= '01-".$bulan."-".$tahun."' 
					AND TGLKUNJRD <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGLKUNJRD 
				ORDER BY TGLKUNJRD";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_radiologi($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGL_DAFTAR, 'DD') TGL, to_char(TGL_DAFTAR, 'MM') BLN,count(*) JLH 
				FROM PASIEN_RADIOLOGI 
				WHERE TGL_DAFTAR >= '01-".$bulan."-".$tahun."' 
					AND TGL_DAFTAR <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGL_DAFTAR 
				ORDER BY TGL_DAFTAR";
		
		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_patalogi_anatomi($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGL_DAFTAR, 'DD') TGL, to_char(TGL_DAFTAR, 'MM') BLN,count(*) JLH 
				FROM PASIEN_PA 
				WHERE TGL_DAFTAR >= '01-".$bulan."-".$tahun."' 
					AND TGL_DAFTAR <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGL_DAFTAR 
				ORDER BY TGL_DAFTAR";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_rehabilitasi_medik($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGLKUNJ_RM, 'DD') TGL, to_char(TGLKUNJ_RM, 'MM') BLN,count(*) JLH 
				FROM KUNJUNGAN_RM 
				WHERE TGLKUNJ_RM >= '01-".$bulan."-".$tahun."' 
					AND TGLKUNJ_RM <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGLKUNJ_RM 
				ORDER BY TGLKUNJ_RM";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}

	function get_nuklir($type = '', $bulan = '', $tahun = '')
	{
		$hasil = $this->get_month($bulan, $tahun);

		$bulan = ($bulan == '') ? date('M') : $hasil['bulan'];
		$tahun = ($tahun == '') ? date('y') : $tahun;
		$end_date = $hasil['end_date'];

		$sql = "SELECT to_char(TGL_PERIKSA, 'DD') TGL, to_char(TGL_PERIKSA, 'MM') BLN,count(*) JLH 
				FROM DAFTAR_ULANG_NUK 
				WHERE TGL_PERIKSA >= '01-".$bulan."-".$tahun."' 
					AND TGL_PERIKSA <= '".$end_date."-".$bulan."-".$tahun."'
				GROUP BY TGL_PERIKSA 
				ORDER BY TGL_PERIKSA";

		$query = $this->db->query($sql)->result_array();
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($query));
			return;
		}else{
			return $query;
		}
	}
}

/* End of file graphics.php */
/* Location: ./application/modules/graphics/controllers/graphics.php */