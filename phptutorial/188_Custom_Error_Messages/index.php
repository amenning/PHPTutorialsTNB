<?php 

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_db = 'a_database';

class ServerException extends Exception {
	public function showSpecific(){
		return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
	}
}

class DatabaseException extends Exception {
	public function showSpecific(){
		return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
	}
}

try{
	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password)){
		throw new ServerException();
	}else if(!@mysql_select_db($mysql_db)){
		throw new DatabaseException();
	}else{
		echo 'Connected.';
	}
}catch(ServerException $ex){
	echo 'Error: '.$ex->showSpecific();
}catch(DatabaseException $ex){
	echo 'Error: '.$ex->showSpecific();
}
	
?>