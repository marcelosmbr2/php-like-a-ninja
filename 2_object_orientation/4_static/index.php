<?php

// Execute with the command: php index.php

class User
{
    // A static property is shared by every object of the class.
    private static int $total_users = 0;

    // Instance properties are unique to each object of the class.
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

    // A static method is called on the class, not on an object.
    public static function getTotalUsers(): int
    {
        return self::$total_users; 
    }

    // An instance method is called on an object of the class.
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
