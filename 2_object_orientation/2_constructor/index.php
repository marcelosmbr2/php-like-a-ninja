<?php

// Execute com o comando: php index.php

class Weapon
{
    public string $name;
    public int $damage;

    // O construtor roda automaticamente quando o objeto é criado.
    public function __construct(string $name, int $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }
}

$katana = new Weapon("Katana", 30);
echo $katana->name . " deals " . $katana->damage . "\n";
