<?php

// Execute with the command: php index.php

// A namespace is a prefix for class names, so two classes with the same
// short name never collide. This is how Laravel and every modern project
// declare it: one class per file, namespace on the first line.

require __DIR__ . "/app/Models/User.php";

// "use" imports the class so you can call it by its short name.
use App\Models\User;

$user = new User("Ninja", "ninja@php.dev");

echo $user->name . "\n";
echo $user->email . "\n";

// Without "use", write the full name starting with a backslash.
$other = new \App\Models\User("Guest", "guest@php.dev");
echo $other->name . "\n";

// The name PHP knows is always the fully qualified one.
echo $user::class . "\n";
