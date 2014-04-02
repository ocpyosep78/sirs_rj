<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_daftar_ulang extends MX_Controller {

	var $no_medrec;

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
		$this->load->model('addon_model','addon');
	}

	function _get_daful($type='json', $no_medrec = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$this->no_medrec = $no_medrec;
		$bulan           = $this->input->post('MM');
		$tahun           = $this->input->post('YYYY');

		if($bulan == '' AND $tahun == ''){
			$data['result'] = $this->pasien->pasien_get_daftar_ulang($no_medrec);
		}else{
			$data['result'] = $this->pasien->pasien_get_daftar_ulang_filter($no_medrec, $bulan, $tahun);
		}

		$data['bulan'] = $this->pasien->pasien_get_group_daftar_ulang($this->no_medrec,'MONTH');
		$data['tahun'] = $this->pasien->pasien_get_group_daftar_ulang($this->no_medrec,'YEAR');

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function daful_tb_()
	{
		$query['query'] = $this->_get_daful('query');
		$query['print'] = print_button('report_daftar_ulang/'.$this->no_medrec);
		echo $this->load->view('request/request_daftar_ulang', $query);
	}

	function rp_daful_tb_($no_medrec)
	{
		$query['query'] = $this->_get_daful('query',$no_medrec);
		$data['content'] = $this->load->view('request/request_daftar_ulang', $query, true);
		$data['title'] = 'Biodata';
		$this->load->view('template_report',$data);
	}

}

/* End of file a_r_daftar_ulang.php */
/* Location: ./application/modules/ajax_request/controllers/a_r_daftar_ulang.php */
