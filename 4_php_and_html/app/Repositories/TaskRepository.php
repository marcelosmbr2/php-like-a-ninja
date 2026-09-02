<?php

namespace App\Repositories;

use PDO;

// Um repository reúne em um só lugar todas as queries de uma tabela.
// O resto da aplicação chama métodos, nunca escreve SQL.
class TaskRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all(): array
    {
        return $this->pdo
            ->query("SELECT id, title, done FROM tasks ORDER BY done, id")
            ->fetchAll();
    }

    public function pendingCount(): int
    {
        return (int) $this->pdo
            ->query("SELECT COUNT(*) FROM tasks WHERE done = 0")
            ->fetchColumn();
    }

    public function create(string $title): void
    {
        $statement = $this->pdo->prepare("INSERT INTO tasks (title) VALUES (:title)");
        $statement->execute(["title" => $title]);
    }

    public function toggle(int $id): void
    {
        $statement = $this->pdo->prepare("UPDATE tasks SET done = NOT done WHERE id = :id");
        $statement->execute(["id" => $id]);
    }

    public function delete(int $id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");
        $statement->execute(["id" => $id]);
    }
}
