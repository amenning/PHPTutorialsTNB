<?php
require 'connect.inc.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip){
	global $user_ip;
	echo $user_ip;
}

function update_count(){
	
}

ip_exists('1');

?>