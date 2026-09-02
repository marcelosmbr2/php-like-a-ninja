<?php

// Execute com o comando: php index.php

// PDO (PHP Data Objects) é a forma padrão de conversar com um banco de dados.
// A conexão fica em app/Database.php, as queries em app/Repositories.
// Este arquivo apenas usa os dois.

require __DIR__ . "/app/Database.php";
require __DIR__ . "/app/Repositories/StudentRepository.php";

use App\Database;
use App\Repositories\StudentRepository;

$pdo = Database::connect();
Database::migrate($pdo);

$students = new StudentRepository($pdo);

// CRUD -----------------------------------------------------------------------

$johnId = $students->create("John Doe", "john@ninja.dev");
$students->create("Ana", "ana@ninja.dev");

echo "-- after create --" . PHP_EOL;
print_r($students->all());

echo "-- find one --" . PHP_EOL;
print_r($students->find($johnId));

echo "-- after update --" . PHP_EOL;
var_dump($students->update($johnId, "John Doe Ninja", "john@ninja.dev"));
print_r($students->find($johnId));

echo "-- after delete --" . PHP_EOL;
var_dump($students->delete($johnId));
var_dump($students->delete(999)); // nenhuma linha corresponde
print_r($students->all());

// TRANSAÇÕES -----------------------------------------------------------------

// Quando várias escritas precisam vencer ou falhar juntas, use uma transaction.
try {
    $pdo->beginTransaction();

    $students->create("Bruno", "bruno@ninja.dev");
    $students->create("Clone", "ana@ninja.dev"); // email duplicado: lança erro

    $pdo->commit();
} catch (PDOException $exception) {
    // rollBack() desfaz todas as escritas feitas dentro da transaction.
    $pdo->rollBack();
    echo "-- transaction failed: " . $exception->getMessage() . PHP_EOL;
}

echo "-- Bruno was rolled back too --" . PHP_EOL;
print_r($students->all());
