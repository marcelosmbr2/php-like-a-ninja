<?php

// Execute with the command: php index.php

enum Status
{
    case Draft;
    case Published;
    case Archived;
}

$status = Status::Published;

echo $status->name . "\n";
var_dump($status === Status::Published);

// A backed enum has a value behind each case (string or int).
enum Role: string
{
    case Admin = "admin";
    case Editor = "editor";
    case Reader = "reader";
}

$role = Role::Editor;

echo $role->name . "\n";
echo $role->value . "\n";
