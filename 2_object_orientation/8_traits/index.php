<?php

// Execute com o comando: php index.php

// Uma trait é um bloco de código copiado para dentro da classe. Use para
// reaproveitar comportamento entre classes que não têm um pai em comum.
trait Greets
{
    public function greet(): string
    {
        return "Hello from " . static::class . ".\n";
    }
}

class Student
{
    use Greets;
    private string $name;

    function __construct(string $name = "Marcelo")
    {
        $this->name = $name;
    }
}

echo (new Student())->greet();
