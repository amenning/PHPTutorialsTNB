<?php

function has_space($string){
	if(preg_match('/ /',$string)){
		return true;
	}else{
		return false;
	}
}

$string = 'This does have a space';

if(has_space($string)){
	echo 'Has at least one space.';
}else{
	echo 'Has no space.';
}

	
?>
