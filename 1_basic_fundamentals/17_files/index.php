<?php

// Execute com o comando: php index.php

$file = __DIR__ . '/notes.txt';

// Escrever (cria o arquivo, sobrescreve se já existir).
file_put_contents($file, "first line\n");

// Acrescentar ao final, sem apagar o que já estava lá.
file_put_contents($file, "second line\n", FILE_APPEND);

// Ler o arquivo inteiro de uma vez.
echo file_get_contents($file);

// Ler linha a linha para dentro de um array.
$lines = file($file, FILE_IGNORE_NEW_LINES);
foreach ($lines as $i => $line) {
    echo ($i + 1) . ": $line\n";
}

// Conferir se existe antes de ler.
if (file_exists($file)) {
    echo "Size: " . filesize($file) . " bytes\n";
}

// Leitura por handle: não carrega tudo na memória, ideal para arquivos grandes.
$handle = fopen($file, 'r');
while (($line = fgets($handle)) !== false) {
    echo "read: " . trim($line) . "\n";
}
fclose($handle);

// Limpar: unlink apaga o arquivo.
unlink($file);
echo "File removed: " . (file_exists($file) ? 'no' : 'yes') . "\n";
