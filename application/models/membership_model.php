<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends CI_Model {

	function membership_get_validate()
	{
		$username = $this->input->post('user_id');
		$password = md5($this->input->post('password'));
		$sql      = "SELECT * FROM DATA_DOKTER WHERE ID_DOKTER = '$username' AND PASSWORD = '$password'";
		$query    = $this->db->query($sql);
		return ($query->num_rows == 1) ? TRUE : FALSE;
	}

	function membership_get_data($user_id = '')
	{
		$sql   = "SELECT * FROM DATA_DOKTER";
		$sql   .= ($user_id != '') ? " WHERE ID_DOKTER like '$user_id'" : "";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function membership_password_update_data()
	{
		$pass   = $this->input->post('CONFIRM_PASSWORD_BARU');
		$userid = $this->session->userdata('userid');
		
		$data = array(
			'PASSWORD' => md5($pass),
		);
		$this->db->where('ID_DOKTER', $userid);
		$query = $this->db->update('DATA_DOKTER', $data);
		return $query;
	}

	function membership_password_validate($pass)
	{
		$userid = $this->session->userdata('userid');
		$pass   = md5($pass);
		$sql    = "SELECT * FROM DATA_DOKTER WHERE ID_DOKTER = '$userid' AND PASSWORD = '$pass'";
		$query  = $this->db->query($sql)->result_array();
		return $query;
	}
}