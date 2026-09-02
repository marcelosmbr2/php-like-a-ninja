# PHP Like a Ninja
 
Estudos dos fundamentos da linguagem PHP, organizados como uma trilha: cada pasta é um tópico isolado, com exemplos pequenos, comentados e executáveis pelo terminal.

## Requisitos
 
- PHP 8.1 ou superior (`php -v`)
- [Composer](https://getcomposer.org/) — só nos módulos que dependem de pacotes externos
- Extensões `pdo_sqlite` e `json` habilitadas (vêm por padrão na maioria das instalações)

## Trilha
 
### 1. Fundamentos
 
| Tópico | Conteúdo |
| --- | --- |
| `1_setup` | Instalação, `php -v`, servidor embutido |
| `2_sintax` | Tags, ponto e vírgula, comentários |
| `3_variables_types` | Tipos escalares, casting, `var_dump` |
| `4_strings` | Interpolação, heredoc, funções de string |
| `5_input_ouput` | `echo`, `print_r`, entrada via CLI |
| `6_operators` | Aritméticos, comparação, spaceship, null coalescing |
| `7_conditionals` | `if`, `switch`, `match` |
| `8_loops` | `for`, `foreach`, `while`, `break`/`continue` |
| `9_arrays` | Indexados, associativos, `array_map`/`filter`/`reduce` |
| `10_functions` | Argumentos nomeados, tipos de retorno, arrow functions |
| `11_includes` | `require`, `include`, separação em arquivos |
| `12_superglobals` | `$_GET`, `$_POST`, `$_SERVER`, `$_SESSION` |
| `13_try_catch` | Exceções, `finally`, exceções customizadas |
| `14_enums` | Enums puros e com valor associado |
| `15_namespaces` | PSR-4 na prática, `use`, alias |
| `16_composer` | `composer.json`, autoload, primeira dependência |
| `17_files` | Leitura e escrita, `file_get_contents`, streams |
| `18_json_serialization` | `json_encode`/`decode`, `JsonSerializable` |
 
### 2. Orientação a objetos
 
Classes e objetos · construtores e promoção de propriedades · encapsulamento · membros estáticos · herança · classes abstratas · interfaces · traits.
 
### 3. PDO e segurança
 
- `1_pdo` — conexão, CRUD completo, prepared statements, transações, repositórios
- `2_security_essentials` — SQL injection, XSS, hash de senha, validação de entrada

### 4. PHP e HTML
 
Uma pequena aplicação juntando as peças anteriores: repositórios em `app/`, templates em `views/`, formulários e escape de saída.
 
### 5. Indo mais fundo
 
- `1_pest_testing` — testes automatizados com [Pest](https://pestphp.com/)
- `2_performance_profiling` — Xdebug, Blackfire, OPcache e JIT
- `3_code_quality` — análise estática com [PHPStan](https://phpstan.org/) e formatação com [PHP-CS-Fixer](https://cs.symfony.com/)
