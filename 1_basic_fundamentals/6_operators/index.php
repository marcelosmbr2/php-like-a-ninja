<?php

// Execute with the command: php index.php

// Arithmetic
$a = 10;
$b = 5;

echo $a + $b . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b . "\n";  
echo $a % $b . "\n";  
echo $a ** $b . "\n"; 

// Increment and decrement
$count = 1;
echo $count++ . "\n"; 
echo ++$count . "\n"; 
echo $count-- . "\n";
echo --$count . "\n";

// Assignment
$x = 5;
$x += 2;
$x -= 1;
$x *= 3;
$x /= 2;
$x **= 2;

// Comparison: == compares values, === also compares types.
var_dump(1 == "1");
var_dump(1 === "1");
var_dump(1 != "1");
var_dump(1 !== "1");

// Logical: && and || short-circuit, ! negates.
$isAdmin = true;
$isActive = false;

var_dump($isAdmin && $isActive);
var_dump($isAdmin || $isActive);
var_dump(!$isActive);
var_dump($isAdmin xor $isActive);
