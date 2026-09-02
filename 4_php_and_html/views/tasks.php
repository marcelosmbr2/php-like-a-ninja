<?php

// A view só imprime: sem queries, sem decisões sobre a requisição.
// $list e $pending vêm do index.php, que deu require neste arquivo.
// Tudo que vem do banco passa por e() antes de chegar ao HTML.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-do list</title>
    <style>
        body { font-family: sans-serif; max-width: 32rem; margin: 3rem auto; }
        li { margin: .4rem 0; }
        .done { text-decoration: line-through; color: #888; }
        form.inline { display: inline; }
    </style>
</head>
<body>

<h1>To-do list</h1>

<!-- Enviar dados muda o estado no servidor, por isso o método é post. -->
<form method="post">
    <input type="hidden" name="action" value="add">
    <!-- O atributo name é a chave que chega no $_POST. -->
    <input type="text" name="title" placeholder="What needs to be done?" autofocus>
    <button type="submit">Add</button>
</form>

<?php if ($list === []): ?>
    <!-- A sintaxe alternativa (if:/endif, foreach:/endforeach) se lê melhor
         quando PHP e HTML estão misturados. -->
    <p>Nothing here yet.</p>
<?php else: ?>
    <ul>
        <?php foreach ($list as $task): ?>
            <li>
                <span class="<?= $task["done"] ? "done" : "" ?>">
                    <?= e($task["title"]) ?>
                </span>

                <form method="post" class="inline">
                    <input type="hidden" name="action" value="toggle">
                    <input type="hidden" name="id" value="<?= (int) $task["id"] ?>">
                    <button type="submit"><?= $task["done"] ? "Undo" : "Done" ?></button>
                </form>

                <form method="post" class="inline">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?= (int) $task["id"] ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- A tag de echo curta é o jeito usual de imprimir um valor no HTML. -->
    <p><?= $pending ?> of <?= count($list) ?> pending.</p>
<?php endif; ?>

</body>
</html>
