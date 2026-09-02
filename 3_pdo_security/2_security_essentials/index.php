<?php

// Execute com o comando: php index.php

// SQL INJECTION --------------------------------------------------------------

// O atacante digita isto em um formulário de login:
$email = "' OR '1' = '1";

// NUNCA monte SQL por concatenação: a entrada vira parte da própria query.
$unsafe = "SELECT * FROM users WHERE email = '$email'";
echo $unsafe . PHP_EOL; // ... WHERE email = '' OR '1' = '1'  -> devolve todos

// Prepared statements enviam a query e os valores separados, então a entrada
// é sempre tratada como dado, nunca como SQL. Veja ../1_pdo para o exemplo.
//   $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
//   $statement->execute(["email" => $email]);

// VALIDAÇÃO E SANITIZAÇÃO ----------------------------------------------------

// Validar = rejeitar o que está errado. Sanitizar = limpar o que você mantém.
// Valide primeiro; nunca confie em nada que venha do usuário.
var_dump(filter_var("ninja@php.dev", FILTER_VALIDATE_EMAIL)); // string
var_dump(filter_var("not-an-email", FILTER_VALIDATE_EMAIL));  // false
var_dump(filter_var("42", FILTER_VALIDATE_INT));              // int(42)
var_dump(filter_var("42abc", FILTER_VALIDATE_INT));           // false

// trim() remove espaços acidentais, uma sanitização barata e útil.
var_dump(trim("  ninja  "));

// XSS ------------------------------------------------------------------------

// XSS acontece quando a entrada do usuário vira HTML e o navegador a executa.
$comment = "<script>alert('hacked')</script>";

// htmlspecialchars transforma < > \" ' & em entidades, então o navegador mostra
// o texto em vez de executá-lo. Escape sempre na SAÍDA.
echo htmlspecialchars($comment, ENT_QUOTES, "UTF-8") . PHP_EOL;

// SENHAS ---------------------------------------------------------------------

// Nunca guarde senhas em texto puro, e nunca use md5/sha1: são rápidos demais,
// que é exatamente o que o atacante quer.
$hash = password_hash("secret123", PASSWORD_DEFAULT);
echo $hash . PHP_EOL; // muda a cada execução: o salt já vem dentro do hash

// Por isso não dá para comparar hashes direto. password_verify faz isso por você.
var_dump(password_verify("secret123", $hash)); // true
var_dump(password_verify("wrong", $hash));     // false

// CSRF -----------------------------------------------------------------------

// CSRF: outro site faz o usuário logado enviar um formulário para o seu. A saída
// é um token secreto que só a sua página conhece.

// 1. Gere e guarde na sessão: $_SESSION["csrf"] = $token;
$token = bin2hex(random_bytes(32)); // random_bytes é criptograficamente seguro
echo $token . PHP_EOL;

// 2. Envie no formulário, como um campo escondido:
//    <input type="hidden" name="csrf" value="O TOKEN">
//    (impresso com a tag de echo curta dentro do HTML)

// 3. No POST, compare com hash_equals (imune a timing attacks).
$sentByTheForm = $token;
var_dump(hash_equals($token, $sentByTheForm)); // true
var_dump(hash_equals($token, "forged"));       // false
