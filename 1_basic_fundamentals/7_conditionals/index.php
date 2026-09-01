<?php

// Execute with the command: php index.php

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

// Ternary for short decisions
$status = $age >= 18 ? "adult" : "minor";
echo "$status\n";

// switch compares loosely (==) and needs break.
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

// match compares strictly (===), returns a value and needs no break.
$level = match ($role) {
    "admin" => 3,
    "editor", "author" => 2,
    default => 1,
};
echo "Level: $level\n";

// Alternative syntax, handy when mixing with HTML.
if ($isActive):
    echo "Active\n";
else:
    echo "Inactive\n";
endif;
