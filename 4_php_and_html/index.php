<?php

// Uma lista de tarefas com PHP, HTML e SQLite.
// Rode com: php -S localhost:8000
// Depois abra: http://localhost:8000
//
//   index.php      este arquivo: lê a requisição e então mostra a página
//   bootstrap.php  requires e objetos que a página precisa, prontos para uso
//   app/           conexão, queries e pequenos helpers
//   views/         o HTML

// É daqui que vêm $tasks (e $pdo).
require __DIR__ . "/bootstrap.php";

// TRATANDO O FORMULÁRIO ------------------------------------------------------

// A mesma URL mostra a página (GET) e recebe os formulários (POST).
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"] ?? "";
    $id = (int) ($_POST["id"] ?? 0);

    if ($action === "add") {
        // Valide antes de gravar: nada de tarefas vazias.
        $title = trim($_POST["title"] ?? "");

        if ($title !== "") {
            $tasks->create($title);
        }
    }

    if ($action === "toggle") {
        $tasks->toggle($id);
    }

    if ($action === "delete") {
        $tasks->delete($id);
    }

    // Sempre redirecione depois de uma escrita, nunca imprima a página aqui.
    redirect("index.php");
}

// MOSTRANDO A PÁGINA ---------------------------------------------------------

// Busque os dados aqui; a view abaixo só imprime estas variáveis.
$list = $tasks->all();
$pending = $tasks->pendingCount();

require __DIR__ . "/views/tasks.php";
