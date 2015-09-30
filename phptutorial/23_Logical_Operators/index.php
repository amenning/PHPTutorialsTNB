<?php

$upper = 1000;
$lower = 500;

$number = 54;


//&& or AND or and; || or OR or or; ! or NOT or not
if($number>=$lower && $number<=$upper){
	echo 'Ok!';
}else{
	echo 'Number must be between '.$lower.' and '.$upper;
}

?>
