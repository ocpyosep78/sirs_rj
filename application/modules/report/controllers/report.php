<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends MX_Controller {
	
	function __construct()
	{
		$this->load->model('pasien_model','pasien');
		$this->load->model('addon_model','addon');
		$this->load->model('report_model','report');
	}

	function report_biodata($no_medrec)
	{
		$data['result']    = $this->pasien->pasien_get_biodata($no_medrec);
		$result['content'] = $this->load->view("report_biodata", $data, true);
		$result['title']   = "BIODATA PASIEN";
		$this->load->view('template_report', $result);
	}

	function _pre_Content($no_medrec, $tgl, $poli)
	{
		$data['result'] = $this->report->report_mini_detail_pasien($no_medrec, $tgl, $poli);
		return $this->load->view("report_biodata_singkat", $data, true);
	}

	function _post_content($no_medrec, $tgl, $poli)
	{
		$data['result'] = $this->report->report_mini_detail_pasien($no_medrec, $tgl, $poli);
		return $this->load->view("report_post_content", $data, true);	
	}

	function _signature($no_medrec, $tgl, $poli)
	{
		$data['result'] = $this->report->report_mini_detail_pasien($no_medrec, $tgl, $poli);
		return $this->load->view("report_signature", $data, true);
	}

	function report_anamnesa($no_medrec, $tgl, $poli)
	{
		$data['result']       = $this->report->report_get_anamnesa_pasien($no_medrec, urldecode($tgl), $poli);
		$data['signature']    = $this->_signature($no_medrec, urldecode($tgl), $poli);
		$result['content']    = $this->load->view("report_anamnesis", $data, true);
		$result['title']      = "ANAMNESA PASIEN";
		$this->load->view('template_report', $result);	
	}

	function report_catatan_khusus($no_medrec, $tgl, $poli)
	{
		$data['result']       = $this->report->report_get_catatan_khusus($no_medrec, urldecode($tgl), $poli);
		$result['content']    = $this->load->view("report_catatan_khusus", $data, true);
		$result['title']      = "CATATAN KHUSUS";
		$this->load->view('template_report', $result);	
	}

	function report_daftar_ulang($no_medrec)
	{
		$data['biodata']	  = $this->report->report_base_biodata($no_medrec);
		$data['result']       = $this->report->report_get_daftar_ulang($no_medrec);
		$result['content']    = $this->load->view("report_daftar_ulang", $data, true);
		$result['title']      = "RIWAYAT BEROBAT PASIEN";
		$this->load->view('template_report', $result);	
	}

	function report_prosedur($no_medrec, $tgl, $poli)
	{
		$data['result']       = $this->report->report_get_catatan_khusus($no_medrec, urldecode($tgl), $poli);
		$result['content']    = $this->load->view("report_prosedur", $data, true);
		$result['title']      = "LAPORAN EKSEKUSI";
		$this->load->view('template_report', $result);	
	}

	function report_konsul($no_medrec, $tgl, $poli, $id_konsul)
	{
		$data['result']       = $this->report->report_get_konsul($no_medrec, urldecode($tgl), $poli, $id_konsul);
		$result['content']    = $this->load->view("report_konsul", $data, true);
		$result['title']      = "LAPORAN KONSUL";
		$this->load->view('template_report', $result);
	}

	function report_obat($no_medrec, $tgl, $poli)
	{
		$data['result']       = $this->report->report_get_obat($no_medrec, urldecode($tgl), $poli);
		$result['content']    = $this->load->view("report_pengobatan_inastk", $data, true);
		$result['title']      = "NOTA PERMINTAAN OBAT";
		$this->load->view('template_report', $result);
	}
}

/* End of file report.php */
/* Location: ./application/modules/report/controllers/report.php */