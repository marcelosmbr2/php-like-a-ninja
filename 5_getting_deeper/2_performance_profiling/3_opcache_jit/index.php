<?php

// Execute com o comando: php index.php

// OPCACHE
// A cada requisição o PHP lê seus arquivos .php, faz o parse e os transforma em
// opcodes (instruções para o motor). O OPcache guarda esses opcodes na memória,
// então da segunda requisição em diante essa etapa inteira é pulada.
// É o ganho de performance mais barato do PHP: uma config, nenhuma mudança no código.

// php.ini para produção:
//   opcache.enable=1
//   opcache.memory_consumption=256
//   opcache.max_accelerated_files=20000
//   opcache.validate_timestamps=0
// A última diz "não verifique se o arquivo mudou no disco", o que é
// mais rápido, mas faz cada deploy exigir um restart do php-fpm.
// Em desenvolvimento mantenha validate_timestamps=1, ou suas edições são ignoradas.

$status = function_exists("opcache_get_status") ? opcache_get_status(false) : null;

if (!$status || !$status["opcache_enabled"]) {
    echo "OPcache is off. Turn it on in php.ini.\n";
} else {
    $stats = $status["opcache_statistics"];
    $memory = $status["memory_usage"];

    echo "Cached files: " . $stats["num_cached_scripts"] . "\n";
    echo "Hits: " . $stats["hits"] . " | Misses: " . $stats["misses"] . "\n";
    echo "Memory used: " . round($memory["used_memory"] / 1024 / 1024, 2) . " MB\n";
    // Uma aplicação saudável tem muitos hits e quase nenhum miss.
}

// JIT (PHP 8+)
// O JIT vai um passo além: converte os opcodes mais quentes em código de máquina.
// Ele vive dentro do OPcache:
//   opcache.jit_buffer_size=64M
//   opcache.jit=tracing
// Ajuda muito em matemática pesada e laços longos (processar imagem, código de ML).
// Ajuda muito pouco numa aplicação web comum, porque lá o tempo é gasto
// esperando o banco, o cache e a rede - não na CPU.

echo "JIT active: " . (!empty($status["jit"]["on"]) ? "yes" : "no") . "\n";

// Exemplo preso na CPU: o tipo de código que o JIT realmente acelera.
$start = hrtime(true);

$total = 0;
for ($i = 0; $i < 5_000_000; $i++) {
    $total += $i % 7;
}

echo "Loop result: {$total}\n";
echo "Time: " . round((hrtime(true) - $start) / 1_000_000) . " ms\n";
// Rode isto com o JIT ligado e desligado e compare os dois números.

// Resumo: OPcache é obrigatório em produção. JIT é opcional,
// meça antes de habilitar.
