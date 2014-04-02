<?php 
	
	$data = site_component();

	echo $this->load->view('includes_main/header', $data);
	echo $this->load->view('includes_main/body');
	echo $content;
	echo $this->load->view('includes_main/footer', $data); 
?>