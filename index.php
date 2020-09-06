<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE); // Não mostrar undefined
if(isset($_COOKIE['usuario'])){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercicios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario']; ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
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