<?php

if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];	
}

if(!empty($search_text)){
	if(@mysql_connect('localhost','root','')){
		if(@mysql_select_db('ajax')){
			
			
			$query="SELECT `name` FROM `names` WHERE `name` LIKE '%".mysql_real_escape_string($search_text)."%'";
			$query_run=mysql_query($query);
			
			while($query_row = mysql_fetch_assoc($query_run)){
				echo $name = '<a href="anotherpage.php?search_text='.$query_row['name'].'">'.$query_row['name'].'</a><br>';
			}
		}
	}
}

?>