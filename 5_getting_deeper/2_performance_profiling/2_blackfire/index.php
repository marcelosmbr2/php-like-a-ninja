<?php

// Execute com o comando: php index.php

// Site: https://www.blackfire.io/

// BLACKFIRE é um profiler como o Xdebug, mas feito para rodar em servidores.
// Ele mede algumas requisições em vez de cada linha, então o overhead é mínimo
// e dá para fazer profiling da produção (ou de uma cópia dela) com segurança.

// Como usar (depois de instalar o agent, a probe e a CLI):
//   blackfire run php index.php
//   blackfire curl https://my-site.com/checkout
// Ele imprime um link para um call graph no navegador com tempo, memória,
// número de queries SQL e chamadas HTTP por função
