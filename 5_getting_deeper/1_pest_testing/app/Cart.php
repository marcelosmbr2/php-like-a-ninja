<?php

namespace App;

use InvalidArgumentException;

// A classe que vamos testar. Simples de propósito.
class Cart
{
    private array $items = [];

    public function add(string $name, float $price): void
    {
        if ($price < 0) {
            throw new InvalidArgumentException("Price cannot be negative.");
        }

        $this->items[] = ["name" => $name, "price" => $price];
    }

    public function total(): float
    {
        return array_sum(array_column($this->items, "price"));
    }

    public function count(): int
    {
        return count($this->items);
    }
}
