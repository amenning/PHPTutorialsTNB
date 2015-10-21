<?php
require 'core.inc.php';

if(!loggedin()){
	
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	
	if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
		echo 'Ok.';
	}else{
		echo 'All fields are required.';
	}
	
}	
	
	
?>

<form action="register.php" method="POST">
	Username: <br> <input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>"><br><br>
	Password: <br> <input type="password" name="password"><br><br>
	Password again: <br> <input type="password" name="password_again"><br><br>
	Firstname: <br> <input type="text" name="firstname" value="<?php if(!empty($firstname)){echo $firstname;}?>"><br><br>
	Surname: <br> <input type="text" name="surname" value="<?php if(!empty($surname)){echo $surname;}?>"><br><br>
	<input type="submit" value="Register">
</form>

<?php
}else if(loggedin()){
	echo 'You\'re already registered and logged in.';
}


?>