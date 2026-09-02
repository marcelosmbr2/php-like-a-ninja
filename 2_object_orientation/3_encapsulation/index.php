<?php

// Execute com o comando: php index.php

// Encapsulamento: esconda o estado, exponha só o comportamento seguro.
class BankAccount
{
    // public    -> qualquer um acessa
    // protected -> a classe e suas filhas
    // private   -> somente esta classe
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
