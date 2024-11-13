<?php

$host = 'warren.sewanee.edu';
$user = 'hammoca0';
$pass = print_pass();
$db = 'hammoca0';
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$db;charset=$chrs";
$opts = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,
	PDO::ATTR_EMULATE_PREPARES => false
];


function print_pass() {
	return "sewanee";
}
?>