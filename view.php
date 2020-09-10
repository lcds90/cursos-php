<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/view.css">
</head>
<body class='view'>
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
<nav class="navegacao">
<span class="usuario">Usuário: <?= $_SESSION['usuario']; ?></span>
    <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
    <a href="index.php" class="azul">Voltar</a>
    <a href="logout.php" class="vermelho">Sair</a>
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