<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_asuhan_keperawatan extends MX_Controller {

	var $no_medrec;
	var $tanggal;
	var $id_poli; 

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
		$this->load->model('addon_model','addon');
	}

	function _get_asuhan_keperawatan($type='json', $no_medrec = '')
	{
		$no_medrec       = $this->input->post('nomed');
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_asuhan_keperawatan($no_medrec, $tanggal, $id_poli);

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	public function asuhan_keperawatan_tb_()
	{	
		$query['query'] = $this->_get_asuhan_keperawatan('query');
		echo $this->load->view('request/request_asuhan_keperawatan', $query);
	}

	function _get_disposisi($type='json', $no_medrec = '')
	{
		$no_medrec       = $this->input->post('nomed');
		$tanggal         = $this->input->post('tgl');
		$id_poli         = $this->input->post('idpol');
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_asuhan_keperawatan($no_medrec, $tanggal, $id_poli);

		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	public function asuhan_keperawatan_disposisi_tb_()
	{
		$query['query'] = $this->_get_disposisi('query');
		echo $this->load->view('request/request_asuhan_keperawatan_disposisi', $query);
	}

}

/* End of file a_r_asuhan_keperawatan.php */
/* Location: ./application/modules/ajax_request/controllers/request/a_r_asuhan_keperawatan.php */