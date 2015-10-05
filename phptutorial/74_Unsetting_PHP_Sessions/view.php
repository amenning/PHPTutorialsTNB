<?php
session_start();

if(isset($_SESSION['username'])){
	echo 'Welcome, '.$_SESSION['username'].'. You are '.$_SESSION['age'].'!';
}else{
	echo 'Please log in.';
}

?>