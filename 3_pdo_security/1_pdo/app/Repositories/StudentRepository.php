<?php

namespace App\Repositories;

use PDO;

// Um repository reúne em um só lugar todas as queries de uma tabela.
// O resto da aplicação chama métodos, nunca escreve SQL.
class StudentRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // CREATE -----------------------------------------------------------------

    // Use placeholders (:name) e deixe o PDO enviar os valores à parte
    // É exatamente isso que evita SQL injection.
    public function create(string $name, string $email): int
    {
        $statement = $this->pdo->prepare("
            INSERT INTO students (name, email) VALUES (:name, :email)
        ");

        $statement->execute([
            "name" => $name,
            "email" => $email,
        ]);

        // O id que o banco gerou para a linha recém-inserida.
        return (int) $this->pdo->lastInsertId();
    }

    // READ -------------------------------------------------------------------

    // fetchAll() devolve todas as linhas, ou um array vazio quando não há nada.
    public function all(): array
    {
        return $this->pdo
            ->query("SELECT id, name, email FROM students ORDER BY id")
            ->fetchAll();
    }

    // fetch() devolve uma única linha, ou false quando nada corresponde.
    public function find(int $id): array|false
    {
        $statement = $this->pdo->prepare("SELECT id, name, email FROM students WHERE id = :id");
        $statement->execute(["id" => $id]);

        return $statement->fetch();
    }

    // UPDATE -----------------------------------------------------------------

    // rowCount() diz quantas linhas foram afetadas: 0 significa que nada casou.
    public function update(int $id, string $name, string $email): bool
    {
        $statement = $this->pdo->prepare("
            UPDATE students SET name = :name, email = :email WHERE id = :id
        ");

        $statement->execute([
            "id" => $id,
            "name" => $name,
            "email" => $email,
        ]);

        return $statement->rowCount() > 0;
    }

    // DELETE -----------------------------------------------------------------

    public function delete(int $id): bool
    {
        $statement = $this->pdo->prepare("DELETE FROM students WHERE id = :id");
        $statement->execute(["id" => $id]);

        return $statement->rowCount() > 0;
    }
}
