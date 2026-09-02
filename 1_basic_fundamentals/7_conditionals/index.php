<?php

// Execute com o comando: php index.php

$age = 20;

if ($age >= 18) {
    echo "Adult\n";
} elseif ($age >= 12) {
    echo "Teenager\n";
} else {
    echo "Child\n";
}

if ([1, 2]) {
    echo "A non empty array is truthy\n";
}

// Ternário: um if/else curto que devolve um valor
$status = $age >= 18 ? "adult" : "minor";
echo "$status\n";

// switch compara de forma frouxa (==) e precisa de break.
$role = "editor";

switch ($role) {
    case "admin":
        echo "Full access\n";
        break;
    case "editor":
    case "author":
        echo "Can write content\n";
        break;
    default:
        echo "Read only\n";
}

// match compara de forma estrita (===), devolve um valor e dispensa break.
$level = match ($role) {
    "admin" => 3,
    "editor", "author" => 2,
    default => 1,
};
echo "Level: $level\n";

// Sintaxe alternativa, útil quando o PHP se mistura com HTML.
if ($isActive):
    echo "Active\n";
else:
    echo "Inactive\n";
endif;
