<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_r_anamnesis extends MX_Controller {

	 var $no_medrec;
	 var $tanggal;
	 var $id_poli; 

	function __construct()
	{
		$this->load->model('pasien_model','pasien');
	}
	
	function _get_anam($type='json', $no_medrec = '', $tgl ='', $poli = '')
	{
		$no_medrec       = ($no_medrec == '') ? $this->input->post('nomed') : $no_medrec;
		$tanggal         = ($tgl == '') ? $this->input->post('tgl') : $tgl;
		$id_poli         = ($poli == '') ? $this->input->post('idpol') : $poli;
		$this->no_medrec = $no_medrec;
		$this->tanggal   = $tanggal;
		$this->id_poli   = $id_poli;
		$data['result']  = $this->pasien->pasien_get_anamnesa($no_medrec, $tanggal, $id_poli);
		
		if($type == 'json'){
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
			return;
		}else{
			return $data;
		}
	}

	function anam_tb_()
	{
		$query['query'] = $this->_get_anam('query');
		$query['print'] = print_button('report_anamnesa/'.$this->no_medrec.'/'.$this->tanggal.'/'.$this->id_poli);

		echo $this->load->view('request/request_anamnesis', $query);
	}
}

/* End of file a_r_anamnesis.php */
/* Location: ./application/modules/ajax_request/controllers/a_r_anamnesis.php */