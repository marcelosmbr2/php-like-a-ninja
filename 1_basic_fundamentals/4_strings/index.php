<?php

// Execute com o comando: php index.php

$name = "John Doe";
$age = 30;

// Aspas simples: literal, sem interpolação nem escape sequences.
echo 'Name: $name' . "\n";

// Aspas duplas: interpolam variáveis e escape sequences (\n, \t, \\, \").
echo "Name: $name\n";
echo "Age:\t$age\n";
echo "She said: \"hello\"\n";

// Chaves quando a variável encosta em outros caracteres ou é complexa.
echo "{$name}'s profile\n";

$user = ["name" => "Jane", "roles" => ["admin", "editor"]];
echo "User: {$user['name']} - {$user['roles'][0]}\n";

// Concatenação com . e .=
$first = "PHP";
$last = "Ninja";
$full = $first . " Like a " . $last;
$full .= "!";
echo $full . "\n";

// Heredoc: bloco de texto que interpola, como as aspas duplas.
$text = <<<TEXT
Name: $name
Age: $age
TEXT;
echo $text . "\n";

// Nowdoc: bloco literal, como as aspas simples.
$raw = <<<'TEXT'
No interpolation here: $name
TEXT;
echo $raw . "\n";

// Formatação: printf monta a string a partir de marcadores como %x e %05d
printf("Hex: %x | Padded: %05d\n", 255, 42);
