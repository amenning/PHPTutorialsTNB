<?php
header('Content-type: image/jpeg');

if(isset($_GET['source'])){
	echo $source = $_GET['source'];

	$watermark = imagecreatefrompng('onewormtile.png');
	
	
}



?>