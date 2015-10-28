<?php 

class DatabaseConnect {
	public function __construct($db_host, $db_username, $db_password){
		if (!@$this->Connect($db_host, $db_username, $db_password)){
			echo 'Connection failed';
		}else{
			echo 'Connected to '.$db_host;
		}
	}
	
	public function Connect($db_host, $db_username, $db_password){
		
	}
}

$connection = new DatabaseConnect('localhost','root','');

?>