<?php

// Execute with the command: php index.php

// A class is the blueprint. An object is an instance created from it.
class Ninja
{
    // Properties hold the state of each object.
    public string $name = "Anonymous";

    // Methods are the behaviour of the object.
    public function attack(): string
    {
        return $this->name . " attacks!";
    }
}

$first = new Ninja();
$first->name = "Hanzo";

echo $first->attack() . "\n";

// $this inside the class always points to the current object.
var_dump($first instanceof Ninja);
echo $first::class . "\n";
