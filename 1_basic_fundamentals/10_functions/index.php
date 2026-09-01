<?php

// Execute with the command: php index.php

function greet()
{
    echo "Hello Ninja\n";
}

greet();

// Parameters and return
function sum($a, $b)
{
    return $a + $b;
}

echo sum(2, 3) . "\n";

// Typed parameters and return type
function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo multiply(3, 4) . "\n";

// Default values: they must come after the required ones.
function greetUser(string $name, string $greeting = "Hello"): string
{
    return "$greeting, $name!";
}

echo greetUser("John") . "\n";
echo greetUser("Jane", "Hi") . "\n";

// Nullable type and union type
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

// Variadic: receives the remaining arguments as an array.
function total(int ...$numbers): int
{
    return array_sum($numbers);
}

echo total(1, 2, 3, 4) . "\n";
echo total(...[5, 5]) . "\n";

// Arrow function
$double = fn(int $n): int => $n * 2;
echo $double(21) . "\n";

// Functions as arguments (callbacks)
$numbers = [1, 2, 3, 4];
print_r(array_map(fn($n) => $n ** 2, $numbers));
print_r(array_filter($numbers, fn($n) => $n > 2));

// A function can return another function.
function makeMultiplier(int $factor): callable
{
    return fn(int $n): int => $n * $factor;
}

$triple = makeMultiplier(3);
echo $triple(5) . "\n";

// Recursion: the function calls itself and needs a stop condition.
function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5) . "\n";
