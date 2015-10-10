<?php

$ip_address = $_SERVER['REMOTE_ADDR'];

function hit_count(){
	$ip_file = file('ip.txt');
	foreach($ip_file as $ip){
		echo trim($ip).', ';
	}
	
	/*
	$filename = 'count.txt';
	$handle = fopen($filename, 'r');
	$current = fread($handle, filesize($filename));
	fclose($handle);
	
	echo $current_inc = $current +1;
	
	$handle = fopen($filename, 'w');
	fwrite($handle, $current_inc);
	fclose($handle);	*/
}

?>