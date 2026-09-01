<?php

// Execute with the command: php index.php

echo "Hello", " ", "Ninja", "\n";
print "Printed with print\n";

// print_r and var_dump are for inspecting values.
$user = ["name" => "John", "age" => 30];
print_r($user);
var_dump($user);

// var_export prints valid PHP code.
var_export($user);
echo "\n";

// Input: readline reads a line and removes the line break.
// Everything read is a string.
$name = readline("What is your name? ");
$age = readline("What is your age? ");

echo "Hello, $name! You are $age years old.\n";
