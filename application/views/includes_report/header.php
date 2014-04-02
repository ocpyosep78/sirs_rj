<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1190">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/report.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon"/>
    
    <title><?php echo (isset($title)) ? $browser_title.' - '.$title : $browser_title ; ?></title>
  </head>