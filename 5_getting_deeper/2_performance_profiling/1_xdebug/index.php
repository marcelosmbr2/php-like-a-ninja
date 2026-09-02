<?php

// Execute com o comando: php index.php

// https://xdebug.org/

// XDEBUG é o canivete suíço do desenvolvimento: ele depura (breakpoints)
// e faz profiling (mostra para onde vai o tempo). Nunca use em produção,
// ele pode deixar seu código 2-3x mais lento.

// Como instalar:
//   pecl install xdebug
// Depois adicione ao php.ini:
//   zend_extension=xdebug
//   xdebug.mode=develop,debug,profile
//   xdebug.start_with_request=trigger
//   xdebug.output_dir=/tmp
