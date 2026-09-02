<?php

// Execute com o comando: php index.php

// Aritméticos: soma, subtração, multiplicação, divisão, resto e potência
$a = 10;
$b = 5;

echo $a + $b . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b . "\n";  
echo $a % $b . "\n";  
echo $a ** $b . "\n"; 

// Incremento e decremento: depois da variável usa o valor antes de mudar
$count = 1;
echo $count++ . "\n"; 
echo ++$count . "\n"; 
echo $count-- . "\n";
echo --$count . "\n";

// Atribuição: opera e guarda o resultado na própria variável
$x = 5;
$x += 2;
$x -= 1;
$x *= 3;
$x /= 2;
$x **= 2;

// Comparação: == compara valores, === compara também os tipos.
var_dump(1 == "1");
var_dump(1 === "1");
var_dump(1 != "1");
var_dump(1 !== "1");

// Lógicos: && e || fazem short-circuit, ! nega o valor.
$isAdmin = true;
$isActive = false;

var_dump($isAdmin && $isActive);
var_dump($isAdmin || $isActive);
var_dump(!$isActive);
var_dump($isAdmin xor $isActive);
