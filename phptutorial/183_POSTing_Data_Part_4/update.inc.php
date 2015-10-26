<?php
mysql_connect('localhost','root','');
mysql_select_db('ajax');

if(isset($_POST['text'])){
	echo 'ok.';
}

?>