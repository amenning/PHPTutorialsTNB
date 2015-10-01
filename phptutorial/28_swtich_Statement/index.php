<?php

$number = 4;
$day = 'Monday';

switch ($number){
	case 1:
		echo 'One.';
		break;
	case 2:
		echo 'Two.';
		break;
	case 3:
		echo 'Three.';
		break;
	default:
		echo 'Number not found.';
		break;
}

switch ($day){
	case 'Saturday':
	case 'Sunday':
		echo '<br>It\'s the weekend.';
		break;
	default:
		echo'<br>Not the weekend';
		break;	
}

?>
