<?php

// Setup (only once, in this folder):
//   composer install          installs what composer.json requires
//   composer require vendor/package   adds a new dependency
//
// Execute with the command: php index.php

// This single line replaces every require: Composer generates an autoloader
// that knows both the installed packages and your own "App\" classes.
require __DIR__ . "/vendor/autoload.php";

use App\Models\User;
use Ramsey\Uuid\Uuid;

// Uuid comes from the ramsey/uuid package, downloaded into vendor/.
$id = Uuid::uuid4()->toString();

// User is our own class in app/Models/User.php, mapped by the psr-4 section.
$user = new User($id, "Ninja");

echo $user->id . "\n";
echo $user->name . "\n";
echo $user::class . "\n";

// composer.json  lists what you want, composer.lock pins the exact versions.
// vendor/ is generated, so it is never committed (see .gitignore).
