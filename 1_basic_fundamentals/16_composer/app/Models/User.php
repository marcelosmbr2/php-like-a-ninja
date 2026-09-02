<?php

// O prefixo "App\" aponta para a pasta app/ no composer.json,
// então App\Models\User precisa morar em app/Models/User.php.
namespace App\Models;

class User
{
    public function __construct(
        public string $id,
        public string $name
    ) {
    }
}
