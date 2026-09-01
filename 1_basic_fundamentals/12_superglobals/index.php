<?php

// Superglobals are arrays available in any scope.
// Run a server to see them filled: php -S localhost:8000
// Then open: http://localhost:8000/?name=Ninja

// $_SESSION is the only superglobal PHP does not fill by itself.
// session_start() reads the PHPSESSID cookie, loads the stored data
// into $_SESSION, and sends a Set-Cookie header when the session is new.
// Headers must go before the body, so call it before any output
session_start();

// $_GET: data from the query string (?name=Ninja).
echo ($_GET["name"] ?? "guest") . "\n";

// $_POST: data sent by a form with method="post".
echo ($_POST["email"] ?? "no email") . "\n";

// $_SERVER: information about the request and the environment.
echo ($_SERVER["REQUEST_METHOD"] ?? "CLI") . "\n";

// $_COOKIE: cookies sent by the browser, written with setcookie.
echo ($_COOKIE["theme"] ?? "no cookie") . "\n";

// $_SESSION: data kept between requests.
$_SESSION["visits"] = ($_SESSION["visits"] ?? 0) + 1;
echo "Visits: {$_SESSION["visits"]}\n";

// $_FILES: files sent by a form with enctype="multipart/form-data".
print_r($_FILES);

// Never trust input: always validate and escape before using it.
echo htmlspecialchars($_GET["name"] ?? "") . "\n";
