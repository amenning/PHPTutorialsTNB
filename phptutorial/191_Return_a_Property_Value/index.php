<?php 

class BankAccount{
	public $balance = 10.5;
	
	public function DisplayBalance() {
		return 'Balance: '.$this->balance;
	}	
}

$alex = new BankAccount;
echo $alex->DisplayBalance();

	
?>