<?php

$string = 'This is a string.';

if(preg_match('/is/', $string)){
	echo 'Match found.';
}else{
	echo 'No match found';
}
	
?>
