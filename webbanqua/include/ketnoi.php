<?php
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME', 'traicay');
define('DB_SERVER','remotemysql.com');
define('DB_USER',' m23qNKS5Gv');
define('DB_PASS' ,'QfdIVXpGac');
define('DB_NAME', 'm23qNKS5Gv');
$ung=mysql_connect('remotemysql.com','m23qNKS5Gv','QfdIVXpGac') or die('Khong The Ket Noi Voi May Chu');
$strSQL=mysql_select_db('m23qNKS5Gv',$ung);
mysql_query("SET NAMES 'utf8'");
?>
