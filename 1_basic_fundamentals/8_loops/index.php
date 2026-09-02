<?php

// Execute com o comando: php index.php

// for: início, condição, passo
for ($i = 1; $i <= 5; $i++) {
    echo "for: $i\n";
}

// while: testa antes de executar, pode não rodar nenhuma vez
$count = 3;
while ($count > 0) {
    echo "while: $count\n";
    $count--;
}

// do while: testa no fim, então roda pelo menos uma vez
$n = 0;
do {
    echo "do while: $n\n";
    $n++;
} while ($n < 2);

// foreach percorrendo uma lista
$languages = ["PHP", "JavaScript", "Go"];

foreach ($languages as $language) {
    echo "Language: $language\n";
}

// foreach com o índice ou a chave
foreach ($languages as $index => $language) {
    echo "$index => $language\n";
}

// break encerra o laço, continue pula para a próxima iteração.
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }

    if ($i > 7) {
        break;
    }

    echo "odd: $i\n";
}

// range(início, fim, passo) devolve um array de números.
foreach (range(1, 10, 3) as $value) {
    echo "range: $value\n";
}

// Sintaxe alternativa, útil quando o PHP se mistura com HTML.
foreach ($languages as $language):
    echo "alt: $language\n";
endforeach;
