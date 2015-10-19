<?php
require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){
	echo 'You\'re logged in.';
}else{
	include 'loginform.inc.php';
}

?>