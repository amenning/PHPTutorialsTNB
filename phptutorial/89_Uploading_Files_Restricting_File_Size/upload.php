<?php

@$filename = $_FILES['file']['name'];
@$size = $_FILES['file']['size']; //returs value in bits
$maxsize = 2097152;
@$type = $_FILES['file']['type'];

@$extension = strtolower(substr($filename, strpos($filename, '.')+1));

@$temp_name = $_FILES['file']['tmp_name'];

@$error = $_FILES['file']['error']; //returns 0 if there is no error

if(isset($filename)){
	if(!empty($filename)){
		if(($extension==='jpg'||$extension==='jpeg') && ($type==='image/jpeg' || $type==='image/jpg') && $size<=$maxsize){
			//move file from temporary location to specified location
			$location = 'uploads/';
			if(move_uploaded_file($temp_name,$location.$filename)){
				echo 'Uploaded!';
			}else{
				echo 'There was an error.';
			}		
		}else{
			echo 'File must be jpg/jpeg and must be 2MB or less.';
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