<?php

// Execute com o comando: php index.php

function greet()
{
    echo "Hello Ninja\n";
}

greet();

// Parâmetros e retorno
function sum($a, $b)
{
    return $a + $b;
}

echo sum(2, 3) . "\n";

// Parâmetros tipados e tipo de retorno
function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo multiply(3, 4) . "\n";

// Valores padrão: precisam vir depois dos parâmetros obrigatórios.
function greetUser(string $name, string $greeting = "Hello"): string
{
    return "$greeting, $name!";
}

echo greetUser("John") . "\n";
echo greetUser("Jane", "Hi") . "\n";

// Tipo nullable (?int) e union type (int|float)
function findAge(?int $age): string
{
    return $age === null ? "unknown" : "$age years";
}

echo findAge(null) . "\n";

function format(int|float $value): string
{
    return number_format($value, 2);
}

echo format(10.5) . "\n";

// Variadic: recebe os argumentos restantes como um array.
function total(int ...$numbers): int
{
    return array_sum($numbers);
}

echo total(1, 2, 3, 4) . "\n";
echo total(...[5, 5]) . "\n";

// Arrow function: forma curta, com retorno implícito
$double = fn(int $n): int => $n * 2;
echo $double(21) . "\n";

// Funções como argumento (callbacks)
$numbers = [1, 2, 3, 4];
print_r(array_map(fn($n) => $n ** 2, $numbers));
print_r(array_filter($numbers, fn($n) => $n > 2));

// Uma função pode devolver outra função.
function makeMultiplier(int $factor): callable
{
    return fn(int $n): int => $n * $factor;
}

$triple = makeMultiplier(3);
echo $triple(5) . "\n";

// Recursão: a função chama a si mesma e precisa de uma condição de parada.
function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5) . "\n";
