<?php

require 'conf.inc.php';

foreach($ip_blocked as $ip){
	//echo '<br>'.$ip;
	if($ip == $ip_address){
		die('Your IP address, '.$ip_address.' has been blocked.');
	}
}


?>

<h1>Welcome!</h1>