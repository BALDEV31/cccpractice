<?php
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds for withdrawal.";
        }
    }

    public function displayInfo() {
        echo "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance} USD";
    }
}

$account1 = new BankAccount("123456", "John Doe", 10000);

$account1->deposit(5000);
$account1->withdraw(20000);

$account1->displayInfo();

?>