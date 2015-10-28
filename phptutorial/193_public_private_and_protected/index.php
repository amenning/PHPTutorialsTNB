<?php 

class BankAccount{
	private $balance = 3500;
	
	public function DisplayBalance(){
		return $this->balance;
	}
}

$alex = new BankAccount;
echo $alex->DisplayBalance();
echo $alex->balance;

?>