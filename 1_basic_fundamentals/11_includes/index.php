<?php

// Execute com o comando: php index.php

// require aborta o script se o arquivo faltar, include apenas avisa.
require "helpers.php";

// As versões _once carregam o arquivo apenas na primeira vez.
include "message.php";
include_once "message.php"; // ignorado, o arquivo já tinha sido carregado

// O arquivo incluído enxerga as variáveis declaradas antes do include.
$title = "Included Header";
include "header.php";

// Um arquivo que retorna um valor pode ser capturado em uma variável.
// __DIR__ garante o caminho certo a partir de qualquer diretório.
$config = require __DIR__ . "/config.php";
echo $config["app_name"] . " " . $config["version"] . "\n";
