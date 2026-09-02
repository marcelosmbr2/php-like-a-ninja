<?php

namespace App;

use PDO;

// Tudo sobre a conexão mora aqui
// A aplicação só pede um objeto PDO pronto para uso
class Database
{
    public static function connect(): PDO
    {
        // MySQL: new PDO("mysql:host=localhost;dbname=ninja;charset=utf8mb4", "user", "pass")
        // SQLite: new PDO("sqlite:database.sqlite")
        // Aqui usamos um SQLite em memória, que some ao fim do script
        return new PDO("sqlite::memory:", null, null, [
            // Lançar exceções em vez de falhar em silêncio.
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Devolver as linhas como arrays associativos por padrão.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // Usar prepared statements de verdade, não a emulação do driver.
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    }

    // Em um projeto real o schema mora nas migrations, não no código.
    public static function migrate(PDO $pdo): void
    {
        // exec() executa um comando que não devolve linhas.
        $pdo->exec("
            CREATE TABLE students (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL UNIQUE
            )
        ");
    }
}
