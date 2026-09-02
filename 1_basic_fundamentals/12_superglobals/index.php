<?php

// Superglobals são arrays disponíveis em qualquer escopo.
// Suba um servidor para vê-las preenchidas: php -S localhost:8000
// Depois abra: http://localhost:8000/?name=Ninja

// $_SESSION é a única superglobal que o PHP não preenche sozinho.
// session_start() lê o cookie PHPSESSID, carrega os dados guardados
// em $_SESSION e envia um header Set-Cookie quando a sessão é nova.
// Headers vão antes do corpo, então chame antes de qualquer saída
session_start();

// $_GET: dados vindos da query string (?name=Ninja).
echo ($_GET["name"] ?? "guest") . "\n";

// $_POST: dados enviados por um formulário com method="post".
echo ($_POST["email"] ?? "no email") . "\n";

// $_SERVER: informações sobre a requisição e o ambiente.
echo ($_SERVER["REQUEST_METHOD"] ?? "CLI") . "\n";

// $_COOKIE: cookies enviados pelo navegador, gravados com setcookie.
echo ($_COOKIE["theme"] ?? "no cookie") . "\n";

// $_SESSION: dados mantidos entre uma requisição e outra.
$_SESSION["visits"] = ($_SESSION["visits"] ?? 0) + 1;
echo "Visits: {$_SESSION["visits"]}\n";

// $_FILES: arquivos enviados por um form com enctype="multipart/form-data".
print_r($_FILES);

// Nunca confie na entrada: valide e escape antes de usar.
echo htmlspecialchars($_GET["name"] ?? "") . "\n";
