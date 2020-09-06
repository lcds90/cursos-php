<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercicios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
        <?php require_once('menu.php'); ?>
        </div>
    </main>

    <footer class="rodape">
        &copy; Leonardo Santos - <?= date('Y'); ?>
    </footer>
</body>

</html>