<?php

@$filename = $_FILES['file']['name'];
@$size = $_FILES['file']['size'];
@$type = $_FILES['file']['type'];

@$temp_name = $_FILES['file']['tmp_name'];

@$error = $_FILES['file']['error']; //returns 0 if there is no error

if(isset($filename)){
	if(!empty($filename)){
		//move file from temporary location to specified location
		$location = 'uploads/';
		if(move_uploaded_file($temp_name,$location.$filename)){
			echo 'Uploaded!';
		}
	}else{
		echo 'Please choose a file.';
	}
}

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" ><br><br>
	<input type="submit" value="Submit">	
</form>