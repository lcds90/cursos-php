<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/view.css">
</head>
<body class='view'>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
<nav class="navegacao">
    <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>
    <main class="principal">
        <div class="conteudo">
        <?php 
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            
        ?>
        </div>
    </main>

    <footer class="rodape">
    &copy; Leonardo Santos - <?= date('Y'); ?>
    </footer>
</body>
</html>