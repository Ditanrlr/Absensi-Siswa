<?php 

//WEB CONFIG
$WEB_CONFIG = [
	'app_name' => ' ABSENSI SMAN 6 GARUT', 
	'base_url' => 'http://localhost/rpl/dita/'
];

//DATABASE CONFIG
$DB_CONFIG = [
	'host' => 'localhost',
	'user' => 'root',
	'passwd' => '',
	'db_name' => 'rpl'
];		
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);