<?php

// The "App\" prefix points to the app/ folder in composer.json,
// so App\Models\User must live in app/Models/User.php.
namespace App\Models;

class User
{
    public function __construct(
        public string $id,
        public string $name
    ) {
    }
}
