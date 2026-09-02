<?php

// Tudo o que a página precisa antes de poder funcionar.
// Fica separado para o index.php cuidar apenas da requisição.

require __DIR__ . "/app/helpers.php";
require __DIR__ . "/app/Database.php";
require __DIR__ . "/app/Repositories/TaskRepository.php";

// A conexão é criada uma vez só e compartilhada com quem precisar.
$pdo = App\Database::connect();
$tasks = new App\Repositories\TaskRepository($pdo);
