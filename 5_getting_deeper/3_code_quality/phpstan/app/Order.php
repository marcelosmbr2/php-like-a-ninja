<?php

namespace App;

class Order
{
    public function __construct(private float $price)
    {
    }

    public function withDiscount(int $percent): float
    {
        return $this->price - ($this->price * $percent / 100);
    }

    // Errado de propósito: getTotal() não existe.
    // O PHPStan encontra isso sem executar o código:
    //   Call to an undefined method App\Order::getTotal().
    public function broken(): string
    {
        return $this->getTotal();
    }
}
