<?php

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
		echo 'Ok.';
	}else{
		echo 'All fields are required.';
	}
}

?>

<form action="index.php" method="POST">
	Name: <br><input type="text" name="contact_name"><br><br>
	Email Address: <br><input type="text" name="contact_email"><br><br>
	Message: <br>
	<textarea name="contact_text" rows="6" cols="30"></textarea><br><br>
	<input type="submit" value="Submit">
</form>