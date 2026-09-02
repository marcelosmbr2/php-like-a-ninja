<?php

// Execute with the command: php index.php

// A trait is a block of code copied into a class. Use it to reuse
// behaviour between classes that do not share a parent.
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
