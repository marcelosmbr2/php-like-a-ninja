<?php

// Execute with the command: php index.php

// Encapsulation: hide the state, expose only safe behaviour.
class BankAccount
{
    // public    -> anyone can access
    // protected -> the class and its children
    // private   -> only this class
    private int $balance = 0;

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function balance(): int
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->deposit(50);

echo $account->balance() . "\n";
