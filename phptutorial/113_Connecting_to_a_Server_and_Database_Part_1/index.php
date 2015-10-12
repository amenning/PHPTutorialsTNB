<?php
$conn_error = 'Could not connect.';

$mySQL_host = 'localhost';
$mySQL_user = 'root';
$mySQL_pass = '';

$mySQL_db= 'a_database';

@mysql_connect($mySQL_host,$mySQL_user,$mySQL_pass) or die($conn_error);
mysql_select_db($mySQL_db);

echo 'Connected!';

?>