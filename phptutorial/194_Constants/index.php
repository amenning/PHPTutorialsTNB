<?php 

class Circle{
	const pi = 3.141;
	
	public function Area($radius){
		return $this::pi * ($radius*$radius);
	}
}

$circle = new Circle;
echo $circle->Area(100);

?>