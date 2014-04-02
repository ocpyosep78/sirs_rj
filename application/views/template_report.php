<?php 
  
  $data = site_component();

  echo $this->load->view('includes_report/header', $data);
  echo $this->load->view('includes_report/body');

  if(isset($content)){
    echo $content;
  }

  echo $this->load->view('includes_report/footer', $data); 
?>