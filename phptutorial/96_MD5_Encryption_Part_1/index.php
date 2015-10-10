<?php

if(isset($_POST['user_password']) && !empty($_POST['user_password'])){
	$user_password = $_POST['user_password'];
	
	
	
}else{
	echo 'Please enter a password.';
}

?>

<form action="index.php" method="POST">
	Password: <input type="text" name="user_password"><br><br>
	<input type="submit" value="Submit">
</form>