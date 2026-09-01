<?php

// Execute with the command: php index.php

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
$d = &$c; // reference
$d = 2;
echo "c = $c, d = $d\n"; 

// Constants 
define("APP_NAME", "Ninja App");
const APP_VERSION = "1.0.0";

echo APP_NAME . " " . APP_VERSION . "\n";

// Type casting.
$stringNumber = "42";
$number = (int) $stringNumber;
var_dump($number);
