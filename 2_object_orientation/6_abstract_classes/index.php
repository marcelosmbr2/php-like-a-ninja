<?php

// Execute com o comando: php index.php

// Uma classe abstrata é uma classe pela metade: não pode ser instanciada e
// existe só para ser estendida. Use para compartilhar código entre as filhas.
abstract class Person
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Um método abstrato não tem corpo: toda filha é obrigada a implementá-lo.
    abstract public function job(): string;

    // Um método concreto é herdado do jeito que está.
    public function present(): string
    {
        return $this->name . " works as a " . $this->job() . ".\n";
    }
}

class Student extends Person
{
    public function job(): string
    {
        return "student";
    }
}

echo (new Student("Marcelo"))->present();

// new Person("Qualquer") daria erro: não se instancia uma classe abstrata.
