<?php

class Login extends MX_Controller {
	
	function __construct()
	{
		$this->load->model('membership_model', 'membership');
	}

	public function index()
	{
		if(ENVIRONMENT == 'development')
		{
			$userid = '140066837';
			$namadokter = 'Anonymous-Developer-RD';
			$data = array('userid' => $userid, 'namadokter' => $namadokter, 'is_logged_in' => true);
			$this->session->set_userdata($data);
			redirect(base_url());
		}else{
			if($this->session->userdata('is_logged_in'))
			{
				redirect(base_url());
			}else{
				$before['error'] = $this->session->flashdata('error');
				
				$data['title'] = 'Login';
				$data['content'] = $this->load->view('signin',$before ,true);

				$this->load->view('template_login', $data);
			}
		}
	}

	function validation()
	{
		$userid = $this->input->post('user_id');

		$query = $this->membership->membership_get_validate();
		if($query)
		{
			$dataquery = $this->membership->membership_get_data($userid);
			
			foreach($dataquery as $dq)
			{
				$userid = $dq['ID_DOKTER'];
				$namadokter = $dq['NM_DOKTER'];
			}

			$data = array(
				'userid' => $userid, 
				'namadokter' => $namadokter, 
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}else{
			$pesan = notification_message('login_err');
			$this->session->set_flashdata('error', $pesan['message']);
			$this->session->set_flashdata('header', $pesan['header']);
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
	
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			$pesan = notification_message('login_first');
			$this->session->set_flashdata('error', $pesan['message']);
			$this->session->set_flashdata('header', $pesan['header']);
			redirect('login');
		}
		return false;
	}

	public function is_locked()
	{
		$is_locked = $this->config->item('lock_cruid');
		if($is_locked == true) exit('<div class="empty-row">'.preset_message('sistem_lock').'</div>');
		return false;
	}

	public function profile()
	{
		modules::run('login/is_logged_in');

		$data['title'] = 'Rubah Password';
		$data['content'] = $this->load->view('profile','', true);
		$this->load->view('template_main', $data);
	}

	public function edit_profile()
	{
		modules::run('login/is_logged_in');
		
		$this->form_validation->set_rules('PASSWORD', 'PASSWORD LAMA', 'required|min_length[5]|alpha_numeric|callback_pass['.$this->input->post('PASSWORD').']');
		$this->form_validation->set_rules('PASSWORD_BARU', 'PASSWORD BARU', 'trim|required|min_length[5]|alpha_numeric|xss_clean');
		$this->form_validation->set_rules('CONFIRM_PASSWORD_BARU', 'CONFIRM PASSWORD BARU', 'trim|min_length[5]|required|alpha_numeric|xss_clean|matches[PASSWORD_BARU]');

		if($this->form_validation->run() == false)
		{
			$this->profile();
		}
		else
		{
			$query = $this->membership->membership_password_validate($this->input->post('PASSWORD'));

			if($query)
			{
				$insert = $this->membership->membership_password_update_data();
				$pesan = notification_message('update_pass_success');
				$this->session->set_flashdata('info', $pesan['message']);
				$this->session->set_flashdata('header', $pesan['header']);

				redirect(base_url().'login/profile');
			}
			else
			{
				$this->form_validation->set_message('callback_pass', 'PASSWORD LAMA is Not Match with old Password');
				$this->profile();
			}
		}
	}
}