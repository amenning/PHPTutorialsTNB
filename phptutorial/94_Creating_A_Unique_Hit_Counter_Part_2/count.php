<?php

function hit_count(){
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	
	$ip_file = file('ip.txt');
	
	foreach($ip_file as $ip){
		$ip_single = trim($ip);
		if($ip_address === $ip_single){
			$found = true;
			break;
		}else{
			$found = false;
		}
	}
	
	if($found == true){
		echo 'IP already found.';
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