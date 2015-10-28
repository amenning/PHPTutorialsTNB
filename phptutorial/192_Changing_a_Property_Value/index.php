<?php 

class BankAccount{
	public $balance = 10.5;
	
	public function DisplayBalance() {
		return 'Balance: '.$this->balance;
	}	
	
	public function Withdraw($amount){
		if(($this->balance)<$amount){
			echo 'Not enough money.';
		}else{
			$this->balance = $this->balance - $amount;
		}
	}
	
}

//new instance of class
$alex = new BankAccount;

//withdrawing 5
$alex->Withdraw(12);

//displaying balance
echo $alex->DisplayBalance();

	
?>