<?php

// Um namespace por arquivo, declarado no topo, sem chaves.
// Por convenção ele espelha o caminho das pastas: app/Models -> App\Models
namespace App\Models;

class User
{
    public function __construct(
        public string $name,
        public string $email
    ) {
    }
}
