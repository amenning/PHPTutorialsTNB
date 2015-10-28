<?php 

class BankAccount{
	public $balance = 0;
	
	public function DisplayBalance() {
		return 'Balance: '.$this->balance.'<br>';
	}	
	
	public function Withdraw($amount){
		if(($this->balance)<$amount){
			echo 'Not enough money.<br>';
		}else{
			$this->balance = $this->balance - $amount;
		}
	}
	
	public function Deposit($amount){
		$this->balance = $this->balance + $amount;
	}
	
}

class SavingsAccount extends BankAccount {
	
}

$alex = new BankAccount;
$alex->Deposit(100);
$alex->Withdraw(20);

$alex_savings = new SavingsAccount;
echo $alex_savings->Deposit(3000);

echo $alex->DisplayBalance();
echo $alex_savings->DisplayBalance();

?>