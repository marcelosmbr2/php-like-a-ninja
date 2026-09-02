<?php
namespace App;
use DateTime;

// Feio de propósito: import não usado, indentação ruim, array(),
// chaves no lugar errado.
// Rode o fixer e veja este arquivo ficar legível.
class Messy{
  public function greet( $name ){
        $words = array( 'Hello', 'ninja' );
    if($name == ""){
      return implode(" ",$words);
        }
        return "Hello, {$name}";
  }
}
