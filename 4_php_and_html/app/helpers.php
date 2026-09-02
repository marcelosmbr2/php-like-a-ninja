<?php

// Pequenas funções usadas pelo controller e pelas views.

// Escape: tudo que é impresso dentro do HTML passa por aqui.
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

// POST/Redirect/GET: responder com um redirect impede o navegador de
// reenviar o formulário ao atualizar. Headers vão antes de qualquer saída.
function redirect(string $to): never
{
    header("Location: {$to}");
    exit;
}
