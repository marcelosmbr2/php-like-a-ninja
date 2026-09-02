<?php

// Execute com o comando: php index.php

$name = "John Doe";
$Name = "Jane Doe"; 
$user_age = 30;

echo "Name: $name\n";
echo "Name: $Name\n";
echo "Age: $user_age\n";

$title = "PHP Like a Ninja"; 
$year = 2026;               
$price = 19.90;             
$isActive = true;           
$nothing = null;           

echo gettype($title) . "\n";
echo gettype($year) . "\n";
echo gettype($price) . "\n";
echo gettype($isActive) . "\n";
echo gettype($nothing) . "\n";

$c = 1;
$d = &$c; // referência: $d aponta para o mesmo valor de $c
$d = 2;
echo "c = $c, d = $d\n"; 

// Constantes: definidas uma vez, não mudam mais
define("APP_NAME", "Ninja App");
const APP_VERSION = "1.0.0";

echo APP_NAME . " " . APP_VERSION . "\n";

// Type casting: converte o valor de um tipo para outro.
$stringNumber = "42";
$number = (int) $stringNumber;
var_dump($number);
