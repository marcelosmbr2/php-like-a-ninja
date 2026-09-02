<?php

// Execute with the command: php index.php

// An abstract class is a partial class: it cannot be instantiated and
// exists only to be extended. Use it to share code between children.
abstract class Person
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // An abstract method has no body: every child must implement it.
    abstract public function job(): string;

    // A concrete method is inherited as it is.
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

// new Person("Anyone") would throw: cannot instantiate abstract class.
