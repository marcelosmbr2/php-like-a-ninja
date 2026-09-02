<?php

// Execute com o comando: php index.php
// Veja o que mudaria:     ./vendor/bin/php-cs-fixer fix --dry-run --diff
// Formate de fato:        ./vendor/bin/php-cs-fixer fix

// O PHP CS FIXER formata seu código para um padrão (aqui o PSR-12), para
// ninguém discutir sobre espaços, aspas ou onde a chave vai.

require __DIR__ . "/app/Messy.php";

use App\Messy;

echo (new Messy())->greet("Marcelo") . "\n";

// app/Messy.php está mal formatado de propósito.
// Rode o fixer e abra o arquivo de novo: mesmo comportamento, código legível.
