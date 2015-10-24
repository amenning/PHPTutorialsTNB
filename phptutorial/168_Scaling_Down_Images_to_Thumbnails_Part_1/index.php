<?php
//header('Content-type: image/jpeg');

if(isset($_GET['image'])){
	$image = $_GET['image'];
	
	$image_size = getimagesize($image);
	echo $image_width = $image_size[0];
	echo '<br>'.$image_height = $image_size[1];
}

?>