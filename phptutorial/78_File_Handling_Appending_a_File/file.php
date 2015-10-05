<?php

if(isset($_POST['name'])){
	$name = $_POST['name'];
	if(!empty($name)){
		
		$handle = fopen('names.txt','a');
		fwrite($handle, $name."\n");
		fclose($handle);		
		
	}else{
		echo 'Please type a name.';
	}
}

?>

<form action="file.php" method="POST">
	Name: <br>
	<input type="text" name="name"><br><br>
	<input type="sumbit" value="Submit">
</form>