<?php

// Execute com o comando: php index.php

// Uma interface é um contrato: só as assinaturas dos métodos, sem implementação.
// Ela diz O QUE a classe precisa fazer, nunca COMO.
interface Worker
{
    public function job(): string;
}

interface Studious
{
    public function study(): string;
}

// Uma classe pode implementar várias interfaces (mas estender só uma classe).
class Student implements Worker, Studious
{
    public function job(): string
    {
        return "student";
    }

    public function study(): string
    {
        return "reading books";
    }
}

$student = new Student("Marcelo");

var_dump($student instanceof Worker);
var_dump($student instanceof Studious);
