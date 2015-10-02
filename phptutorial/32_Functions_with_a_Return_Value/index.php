<?php

function add($number1, $number2){
	$result = $number1 + $number2;
	return $result;
}

function divide($number1, $number2){
	$result = $number1 / $number2;
	return $result;
}

$result = divide(add(10,10),add(5,5));
echo $result;

?>
