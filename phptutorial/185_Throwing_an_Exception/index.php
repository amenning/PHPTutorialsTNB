<?php 

function divide($num1, $num2) {
	if($num2==0){
		throw new Exception('Cannot divide by zero.');
	}else{
		return $num1/$num2;
	}
}

echo divide(10,5);

?>