<?php
define('DB_SERVER',' 127.0.0.1');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'traicay');
$ung=mysql_connect(' 127.0.0.1','root','') or die('Khong The Ket Noi Voi May Chu');
$strSQL=mysql_select_db('traicay',$ung);
mysql_query("SET NAMES 'utf8'");
?>
