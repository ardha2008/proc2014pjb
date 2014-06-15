<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 * @version V1.7
 */


/**
 * 
 * ENVIRONMENT = Lingkungan pengembangan (Base on Framework) 
 * http://github.com/ardha2008
 * 
 * 'development' => Keadaan pengembangan debug akan muncul
 * 'rilis'      => Keadaan dirilis, keadaan ini debugging tidak akan muncul maupun error
 */
 
define('ENVIRONMENT', 'rilis');



//=======================================================================//
//========================= DATABASE CONFIG==============================//
//=======================================================================//
 
define('HOSTNAME','localhost');
define('USERDB','root');
define('PASSDB','');
define('NAMADB','epl');

$con = mysql_connect(HOSTNAME,USERDB,PASSDB) or die(mysql_error());
mysql_select_db(NAMADB, $con);
//=========================================================================//

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
		break;
	
		case 'testing':
		case 'rilis':
			error_reporting(0);
		break;

		default:
			exit('Environment belum di set.');
	}
}
?>