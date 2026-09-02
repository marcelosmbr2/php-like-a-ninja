<?php

// Execute com o comando: php index.php
// Execute os testes com o comando: ./vendor/bin/pest

// PEST é um framework de testes construído sobre o PHPUnit, com uma sintaxe
// bem mais simples: sem classes de teste, só funções que se leem como frases.

require __DIR__ . "/vendor/autoload.php";

use App\Cart;

// Usando a classe na mão, só para vê-la funcionando.
$cart = new Cart();
$cart->add("Book", 50.00);
$cart->add("Pen", 5.50);

echo "Items: {$cart->count()}\n";
echo "Total: {$cart->total()}\n";
