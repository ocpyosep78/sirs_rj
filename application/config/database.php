<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------------------
| Database connection
|--------------------------------------------------------------------------------------
|
| ['hostname'] The hostname of your database server.
| ['username'] The username used to connect to the database
| ['password'] The password used to connect to the database
| ['database'] The name of the database you want to connect to
| ['dbdriver'] The database type. ie: mysql.  Currently supported: mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
| ['dbprefix'] You can add an optional prefix, which will be added to the table name when using the  Active Record class
| ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
| ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
| ['cache_on'] TRUE/FALSE - Enables/disables query caching
| ['cachedir'] The path to the folder where cache files should be stored
| ['char_set'] The character set used in communicating with the database
| ['dbcollat'] The character collation used in communicating with the database
|			 	NOTE: For MySQL and MySQLi databases, this setting is only used
| 				as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				(and in table creation queries made with DB Forge).
| 				There is an incompatibility in PHP with mysql_real_escape_string() which
| 				can make your site vulnerable to SQL injection if you are using a
| 				multi-byte character set and are running versions lower than these.
| 				Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
| ['swap_pre'] A default table prefix that should be swapped with the dbprefix
| ['autoinit'] Whether or not to automatically initialize the database.
| ['stricton'] TRUE/FALSE - forces 'Strict Mode' connections - good for ensuring strict SQL while developing
|
*/

switch (SET_DB) {
	case 'SIRS_LIVE':
		$hostname = '//192.168.5.181:1521/ORCL';
		$username = 'ADMSIRS';
		$password = 'safety';
		$database = 'ADMSIRS';
		$dbdriver = 'oci8';
		break;
	case 'SIRS_STAGING':
		$hostname = '//192.168.5.20:1521/ORCL';
		$username = 'ADMSIRS';
		$password = 'chocolate';
		$database = 'ADMSIRS';
		$dbdriver = 'oci8';
		break;
	case 'LOCAL':
		$hostname = 'localhost';
		$username = 'root';
		$password = 'alhamdulillah';
		$database = 'sirs-rj-v2';
		$dbdriver = 'mysql';
		break;
	default:
		exit('No Database Configuration Set');
		break;
}

$active_group = "default";
$active_record = TRUE;

$db['default']['hostname'] = $hostname;
$db['default']['username'] = $username;
$db['default']['password'] = $password;
$db['default']['database'] = $database;
$db['default']['dbdriver'] = $dbdriver;
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */