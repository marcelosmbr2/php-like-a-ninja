<?php

namespace App;

use PDO;

// Tudo sobre a conexão mora aqui.
// A aplicação só pede um objeto PDO pronto para uso.
class Database
{
    public static function connect(): PDO
    {
        // Um arquivo, não ::memory: aqui as tarefas precisam sobreviver à requisição.
        // __DIR__ mantém o caminho certo de onde quer que o script seja chamado.
        $pdo = new PDO("sqlite:" . __DIR__ . "/../database.sqlite", null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);

        self::migrate($pdo);

        return $pdo;
    }

    // Em um projeto real o schema mora nas migrations, não no código.
    // IF NOT EXISTS permite chamar isto a cada requisição sem quebrar nada.
    private static function migrate(PDO $pdo): void
    {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS tasks (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT NOT NULL,
                done INTEGER NOT NULL DEFAULT 0
            )
        ");
    }
}
