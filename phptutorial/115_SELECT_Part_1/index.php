<?php
require 'connect.inc.php';

$query = "SELECT 'food', 'calories', FROM 'food' ORDER BY 'id'";
//$query_run = mysql_query($query);

if ($query_run = mysql_query($query)){
	echo 'Query success.';
}else{
	echo 'Query failed.';
}

?>