<?php

$browser = get_browser(null, true);
//first argument is user agent
//second argument answers if return should be in array format
$browser = strtolower($browser['browser']);

if ($browser!='chrome'){
	echo 'You\'re not using Google Chrome. Please do!';
}

?>