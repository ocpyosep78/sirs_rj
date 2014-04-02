<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Auto-load Packges
| -------------------------------------------------------------------
|
*/
	$autoload['packages'] = array(APPPATH.'third_party');

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
|	$autoload['libraries'] = array('database', 'session', 'xmlrpc');
*/
	$autoload['libraries'] = array('database','session','form_validation');

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
|	$autoload['helper'] = array('url', 'file');
*/
	$autoload['helper'] = array('url','form','html','sisutils','content_html','rules','text');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
|
*/
	$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
|	$autoload['language'] = array('lang1', 'lang2');
|
*/
	$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
|	$autoload['model'] = array('model1', 'model2');
|
*/
	$autoload['model'] = array();


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */