<?php

	$xml = simplexml_load_file('example.xml');
	
	foreach($xml->producer as $producer){
		echo $producer->name.' is '.$producer->age.'<br>';
	}
	

?>