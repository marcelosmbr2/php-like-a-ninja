<?php

// Execute com o comando: php index.php

class User
{
    // Uma propriedade estática é compartilhada por todos os objetos da classe.
    private static int $total_users = 0;

    // As propriedades de instância são únicas para cada objeto da classe.
    private string $name;
    private string $email;
    private string $sex;

    function __construct(string $name, string $email, string $sex)
    {
        self::$total_users++;
        $this->name = $name;
        $this->email = $email;
        $this->sex = $sex;

    }

    // Um método estático é chamado na classe, não em um objeto.
    public static function getTotalUsers(): int
    {
        return self::$total_users; 
    }

    // Um método de instância é chamado em um objeto da classe.
    public function getUser(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'sex' => $this->sex
        ];
    }
}

$user1 = new User("John Doe", "john@example.com", "Male");
$user2 = new User("Jane Smith", "jane@example.com", "Female");

print_r($user1->getUser());
print_r($user2->getUser());
print_r(User::getTotalUsers());
