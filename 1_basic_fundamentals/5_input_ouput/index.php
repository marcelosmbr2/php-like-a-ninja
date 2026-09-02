<?php

// Execute com o comando: php index.php

echo "Hello", " ", "Ninja", "\n";
print "Printed with print\n";

// print_r e var_dump servem para inspecionar valores.
$user = ["name" => "John", "age" => 30];
print_r($user);
var_dump($user);

// var_export imprime código PHP válido, pronto para copiar.
var_export($user);
echo "\n";

// Entrada: readline lê uma linha e remove a quebra de linha.
// Tudo que chega pelo teclado é string.
$name = readline("What is your name? ");
$age = readline("What is your age? ");

echo "Hello, $name! You are $age years old.\n";
