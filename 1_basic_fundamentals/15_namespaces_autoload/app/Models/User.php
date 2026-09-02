<?php

// One namespace per file, declared at the top, without braces.
// By convention it mirrors the folder path: app/Models -> App\Models
namespace App\Models;

class User
{
    public function __construct(
        public string $name,
        public string $email
    ) {
    }
}
