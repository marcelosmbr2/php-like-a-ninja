<?php

// Execute com o comando: php index.php

// Um namespace é um prefixo para nomes de classe
// Duas classes com o mesmo nome curto nunca colidem com namespace diferente
// O namespace permite apelidar a classe
// O namespace é declarado no topo do arquivo, antes de qualquer código

require __DIR__ . "/app/Models/User.php";

// "use" importa a classe para você chamá-la pelo nome curto.
use App\Models\User;

$user = new User("Ninja", "ninja@php.dev");

echo $user->name . "\n";
echo $user->email . "\n";

// Sem o "use", escreva o nome completo começando com barra invertida.
$other = new \App\Models\User("Guest", "guest@php.dev");
echo $other->name . "\n";

// O nome que o PHP conhece é sempre o completo, com namespace.
echo $user::class . "\n";
