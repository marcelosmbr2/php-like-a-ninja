<?php

// Execute com o comando: php index.php

// Array indexado: as chaves começam em 0.
$languages = ["PHP", "JavaScript", "Go"];

echo $languages[0] . "\n";
echo count($languages) . "\n";

// Array associativo: você escolhe as chaves.
$user = [
    "name" => "John",
    "age" => 30,
    "email" => "john@gmail.com",
];

echo $user["name"] . "\n";

// Array multidimensional: um array dentro do outro
$users = [
    ["name" => "John", "age" => 30],
    ["name" => "Jane", "age" => 25],
];

echo $users[1]["name"] . "\n";

foreach ($users as $item) {
    echo "{$item['name']} is {$item['age']}\n";
}
