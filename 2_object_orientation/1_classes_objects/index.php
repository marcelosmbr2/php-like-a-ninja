<?php

// Execute com o comando: php index.php

// A classe é a planta. O objeto é uma instância criada a partir dela.
class Ninja
{
    // As propriedades guardam o estado de cada objeto.
    public string $name = "Anonymous";

    // Os métodos são o comportamento do objeto.
    public function attack(): string
    {
        return $this->name . " attacks!";
    }
}

$first = new Ninja();
$first->name = "Hanzo";

echo $first->attack() . "\n";

// $this dentro da classe sempre aponta para o objeto atual.
var_dump($first instanceof Ninja);
echo $first::class . "\n";
