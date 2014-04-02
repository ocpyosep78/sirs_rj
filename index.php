<?php

/*
|---------------------------------------------------------------
| APPLICATION ENVIRONMENT
|---------------------------------------------------------------
| environtment = {development, testing, production}
|
*/
	define('ENVIRONMENT', 'development');
	
/*
 |---------------------------------------------------------------
 | ERROR REPORTING
 |---------------------------------------------------------------
 |
*/

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

/*
|---------------------------------------------------------------------
| CHOOSE DATABASE SETTING
|---------------------------------------------------------------------
| option = {SIRS_LIVE, SIRS_STAGING, LOCAL}
|
*/
	define('SET_DB','SIRS_LIVE');

/*
 |---------------------------------------------------------------
 | SYSTEM FOLDER NAME
 |---------------------------------------------------------------
 |
*/
	$system_path = '../core_system';

/*
 |---------------------------------------------------------------
 | APPLICATION FOLDER NAME
 |---------------------------------------------------------------
 |
*/
	$application_folder = 'application';

/*
 |---------------------------------------------------------------------
 | DEFAULT CONTROLLER
 |---------------------------------------------------------------------
 |
*/
	// $routing['directory'] = '';
	// $routing['controller'] = '';
	// $routing['function']	= '';


/*
 |-------------------------------------------------------------------
 |  CUSTOM CONFIG VALUES
 |-------------------------------------------------------------------
 |
*/
	// $assign_to_config['name_of_config_item'] = 'value of config item';


/*
 |---------------------------------------------------------------
 |  Resolve the system path for increased reliability
 |---------------------------------------------------------------
 |
*/
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}

	$system_path = rtrim($system_path, '/').'/';

	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 |-------------------------------------------------------------------
 | Now that we know the path, set the main path constants
 |-------------------------------------------------------------------
 |
*/
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	define('EXT', '.php');
	define('BASEPATH', str_replace("\\", "/", $system_path));
	define('FCPATH', str_replace(SELF, '', __FILE__));
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

	if (is_dir($application_folder))
	{
		define('APPPATH', $application_folder.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_folder.'/');
	}

/*
 |--------------------------------------------------------------------
 | LOAD THE BOOTSTRAP FILE
 |--------------------------------------------------------------------
 |
*/
	require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */