<?php

// Execute with the command: php index.php

$name = "John Doe";
$age = 30;

// Single quotes: literal, no interpolation or escape sequences.
echo 'Name: $name' . "\n";

// Double quotes: interpolation and escape sequences (\n, \t, \\, \").
echo "Name: $name\n";
echo "Age:\t$age\n";
echo "She said: \"hello\"\n";

// Curly braces when the variable touches other characters or is complex.
echo "{$name}'s profile\n";

$user = ["name" => "Jane", "roles" => ["admin", "editor"]];
echo "User: {$user['name']} - {$user['roles'][0]}\n";

// Concatenation with . and .=
$first = "PHP";
$last = "Ninja";
$full = $first . " Like a " . $last;
$full .= "!";
echo $full . "\n";

// Heredoc: interpolates like double quotes.
$text = <<<TEXT
Name: $name
Age: $age
TEXT;
echo $text . "\n";

// Nowdoc: literal like single quotes.
$raw = <<<'TEXT'
No interpolation here: $name
TEXT;
echo $raw . "\n";

// Formatting
printf("Hex: %x | Padded: %05d\n", 255, 42);
