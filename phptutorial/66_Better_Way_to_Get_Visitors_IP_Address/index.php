<?php
if(isset($_SERVER['HTTP_CLIENT_IP'])){
	$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
}
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
	$ip_address = $http_client_ip;
}else if(!empty($http_x_forwarded_for)){
	$ip_address = $http_x_forwarded_for;
}else{
	$ip_address = $remote_addr;
}

echo $ip_address;

?>