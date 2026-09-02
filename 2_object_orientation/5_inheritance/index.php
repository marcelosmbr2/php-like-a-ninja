<?php

// Execute com o comando: php index.php

// Herança: a classe filha reaproveita tudo o que a classe pai tem.
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

// "extends" cria a classe filha.
class Samurai extends Character
{

    private string $sword;

    public function __construct(string $name, string $sword)
    {
        // parent:: chama a implementação da classe pai.
        parent::__construct($name);
        $this->sword = $sword;
    }

    // Sobrescrita: a filha substitui o comportamento do pai.
    public function present(): string
    {
        return parent::present() . " and my sword is the " . $this->sword . ".";
    }
}

echo (new Character("Villager"))->present() . "\n";

$samurai = new Samurai("Musashi", "Nodachi");
echo $samurai->present() . "\n";

// Uma filha também é uma instância do pai.
var_dump($samurai instanceof Character);
