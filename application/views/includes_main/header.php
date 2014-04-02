<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1190">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/choosen/chosen.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tagingpicture.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/autocomplete.css" >

    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/responsive/html5shiv.js"></script>
      <script src="assets/js/responsive/respond.min.js"></script>
    <![endif]-->

    <title><?php echo (isset($title)) ? $browser_title.' - '.$title : $browser_title ; ?></title>
  </head>