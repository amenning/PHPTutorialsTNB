<?php
require 'connect.inc.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip){
	global $user_ip;

}

function update_count(){
	$query = "SELECT `count` FROM `hits_count`";
	if(@$query_run = mysql_query($query)){
		$count = mysql_result($query_run, 0, 'count');
		$count_inc = $count + 1;
		
		$query_update = "UPDATE `hits_count` SET `count` = '$count_inc'";
		if(@$query_update_run = mysql_query($query_update)){
			echo 'Ok.';
		}
	}
}

update_count();


?>