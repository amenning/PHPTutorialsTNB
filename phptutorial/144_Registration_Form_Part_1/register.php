<?php
require 'core.inc.php';

if(!loggedin()){
?>

<form action="register.php" method="POST">
	Username: <br> <input type="text" name="username"><br><br>
	Password: <br> <input type="password" name="password"><br><br>
	Password again: <br> <input type="password" name="password_again"><br><br>
	Firstname: <br> <input type="text" name="firstname"><br><br>
	Surname: <br> <input type="text" name="surname"><br><br>
	<input type="submit" value="Register">
</form>

<?php
}else if(loggedin()){
	echo 'You\'re already registered and logged in.';
}


?>