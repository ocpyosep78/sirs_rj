<?php 
	
	$data = site_component();

	echo $this->load->view('includes_main/header', $data);
	echo $this->load->view('includes_main/body');

	if(isset($content)){
		echo $this->load->view('includes_main/notification_section');
		echo $content;
	}else{
		echo $this->load->view('includes_main/search_panel');
		echo $this->load->view('includes_main/notification_section');
		echo $this->load->view('includes_main/content');
	}

	echo $this->load->view('includes_main/footer', $data); 
?>