<?php

// Execute with the command: php index.php

// An interface is a contract: only method signatures, no implementation.
// It says WHAT a class must do, never HOW.
interface Worker
{
    public function job(): string;
}

interface Studious
{
    public function study(): string;
}

// A class can implement many interfaces (it can extend only one class).
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
