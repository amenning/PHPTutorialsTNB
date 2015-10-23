<?php
mysql_connect('localhost','root','');
mysql_select_db('a_database');

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username) && !empty($password)){
		
		echo $username.'<br>'.$password;
		
		//$query = "SELECT `id` FROM `users_151` WHERE `username`='$username' AND `password`='$password'";
		//$query_run = mysql_query($query);
		
	}
	
}


?>

<form action="index.php" method="POST">
Username: <input type="text" name="username">
Password: <input type="text" name="password">
<input type="submit" value="Submit">
</form>