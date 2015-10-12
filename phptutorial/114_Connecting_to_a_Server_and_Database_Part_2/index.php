<?php
$conn_error = 'Could not connect.';

$mySQL_host = 'localhost';
$mySQL_user = 'root';
$mySQL_pass = '';

$mySQL_db= 'a_database';

if(!@mysql_connect($mySQL_host,$mySQL_user,$mySQL_pass) || !@mysql_select_db($mySQL_db)){
	die($conn_error);
}

?>