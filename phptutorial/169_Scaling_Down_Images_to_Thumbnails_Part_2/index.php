<?php
//header('Content-type: image/jpeg');

if(isset($_GET['image'])){
	$image = $_GET['image'];
	
	$image_size = getimagesize($image);
	$image_width = $image_size[0];
	$image_height = $image_size[1];
	
	$new_size = ($image_width + $image_height)/($image_width*($image_height/45));
	$new_width = $image_width * $new_size;
	$new_height = $image_height * $new_size;
	
	
}

?>