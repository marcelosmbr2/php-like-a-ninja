<?php

// Execute com o comando: php index.php

enum Status
{
    case Draft;
    case Published;
    case Archived;
}

$status = Status::Published;

echo $status->name . "\n";
var_dump($status === Status::Published);

// Uma backed enum guarda um valor atrás de cada case (string ou int).
enum Role: string
{
    case Admin = "admin";
    case Editor = "editor";
    case Reader = "reader";
}

$role = Role::Editor;

echo $role->name . "\n";
echo $role->value . "\n";
