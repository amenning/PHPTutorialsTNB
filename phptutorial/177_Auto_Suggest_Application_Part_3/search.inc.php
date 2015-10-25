<?php

if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];	
}


if(@mysql_connect('localhost','root','')){
	if(@mysql_select_db('ajax')){
		
	}
}

?>