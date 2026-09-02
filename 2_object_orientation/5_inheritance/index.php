<?php

// Execute with the command: php index.php

// Inheritance: a child class reuses everything the parent has.
class Character
{

    protected string $name;

    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }

    public function present(): string
    {
        return "I am " . $this->name;
    }
}

// "extends" creates the child class.
class Samurai extends Character
{

    private string $sword;

    public function __construct(string $name, string $sword)
    {
        // parent:: calls the parent implementation.
        parent::__construct($name);
        $this->sword = $sword;
    }

    // Overriding: the child replaces the parent behaviour.
    public function present(): string
    {
        return parent::present() . " and my sword is the " . $this->sword . ".";
    }
}

echo (new Character("Villager"))->present() . "\n";

$samurai = new Samurai("Musashi", "Nodachi");
echo $samurai->present() . "\n";

// A child is also an instance of the parent.
var_dump($samurai instanceof Character);
