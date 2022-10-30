<?php 
/*=======================================================================
  86it Network Config File
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
if(realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) exit('Access Denied');

global $portaladmin, $dbhost2, $dbname2, $dbuname2, $db2, $network_prefix; 
$portaladmin = 2;
define('network', 'enabled');
if ( defined('network') ):
$dbhost2 = 'localhost';
$dbname2 = 'hub_db';
$dbuname2 = 'hub_user'; // you must goto https://www.php-nuke-titanium.86it.us and request a username!
$dbpass2 = ''; // you must goto https://www.php-nuke-titanium.86it.us and request a password!
$network_prefix = 'network';
endif;
?>
