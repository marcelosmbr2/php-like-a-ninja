<?php

// Funções e constantes daqui ficam disponíveis depois do include.

const APP_AUTHOR = "Ninja";

function slugify(string $text): string
{
    return strtolower(str_replace(" ", "-", trim($text)));
}

function money(float $value): string
{
    return "$ " . number_format($value, 2);
}

echo "helpers.php was loaded\n";
