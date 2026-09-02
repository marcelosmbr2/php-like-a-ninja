<?php

// Execute with the command: php index.php

class Weapon
{
    public string $name;
    public int $damage;

    // The constructor runs automatically when the object is created.
    public function __construct(string $name, int $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }
}

$katana = new Weapon("Katana", 30);
echo $katana->name . " deals " . $katana->damage . "\n";
