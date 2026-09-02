<?php

// Execute com o comando: php index.php
// Analise o código com: ./vendor/bin/phpstan analyse

// O PHPSTAN lê seu código sem executá-lo e aponta bugs:
// erros de digitação, tipos errados, métodos que não existem, variáveis sem uso.

require __DIR__ . "/vendor/autoload.php";

use App\Order;

$order = new Order(200.00);

echo $order->withDiscount(10) . "\n";

// Order::broken() está errado de propósito. Rode o phpstan para vê-lo reclamar,
// depois conserte o método e rode de novo para ver a linha verde.
