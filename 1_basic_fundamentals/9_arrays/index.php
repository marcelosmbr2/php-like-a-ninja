<?php

// Execute with the command: php index.php

// Indexed array: keys start at 0.
$languages = ["PHP", "JavaScript", "Go"];

echo $languages[0] . "\n";
echo count($languages) . "\n";

// Associative array: your own keys.
$user = [
    "name" => "John",
    "age" => 30,
    "email" => "john@gmail.com",
];

echo $user["name"] . "\n";

// Multidimensional array
$users = [
    ["name" => "John", "age" => 30],
    ["name" => "Jane", "age" => 25],
];

echo $users[1]["name"] . "\n";

foreach ($users as $item) {
    echo "{$item['name']} is {$item['age']}\n";
}
