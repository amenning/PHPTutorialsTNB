<?php
require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){
	echo 'You\'re logged in. <a href="logout.php">Log out</a>';
}else{
	include 'loginform.inc.php';
}

?>