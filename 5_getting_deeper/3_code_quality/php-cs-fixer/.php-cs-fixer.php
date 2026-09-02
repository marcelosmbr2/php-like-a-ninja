<?php

// As regras que o PHP CS Fixer vai aplicar.
// PSR-12 é o estilo padrão usado por Laravel, Symfony e a maioria dos projetos.
return (new PhpCsFixer\Config())
    ->setRules([
        "@PSR12" => true,
        "array_syntax" => ["syntax" => "short"], // [] em vez de array()
        "no_unused_imports" => true,
        "single_quote" => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()->in(__DIR__ . "/app")
    );
