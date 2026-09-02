<?php

// Setup (só uma vez, nesta pasta):
//   composer install          instala o que o composer.json exige
//   composer require vendor/package   adiciona uma nova dependência
//
// Execute com o comando: php index.php

// Esta única linha substitui todos os require: o Composer gera um autoloader
// que conhece tanto os pacotes instalados quanto as suas classes "App\".
require __DIR__ . "/vendor/autoload.php";

use App\Models\User;
use Ramsey\Uuid\Uuid;

// Uuid vem do pacote ramsey/uuid, baixado dentro de vendor/.
$id = Uuid::uuid4()->toString();

// User é a nossa classe em app/Models/User.php, mapeada pela seção psr-4.
$user = new User($id, "Ninja");

echo $user->id . "\n";
echo $user->name . "\n";
echo $user::class . "\n";

// composer.json  lista o que você quer, composer.lock trava as versões exatas.
// vendor/ é gerado, por isso nunca vai para o commit (veja o .gitignore).
