<?php
///////////////config//////////////////
define('DB_HOST','YOUR_DB_HOST');
define('DB_USER','YOUR_DB_USER');
define('DB_PASSWORD','YOUR_DB_PASSWORD');
define('DB_NAME','YOUR_DB_NAME');

define("COUNT_PER_PAGE",5);

$site_name = 'Тестовый сайт';
$button = "Button";
///////////////config//////////////////

//
$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$db) {
	exit('No connection with database');
}

if(!mysql_select_db(DB_NAME,$db)) {
	exit('Wrong database');
}
mysql_query("SET NAMES UTF8");
?>