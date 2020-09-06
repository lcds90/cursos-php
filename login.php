<?php 
session_start();

error_reporting(E_ALL & ~E_NOTICE); // Não mostrar undefined

$email = $_POST['email'];
$senha = $_POST['senha'];

if(isset($_POST['email'])){
    $usuarios = [
        [
            "nome" => "Aluno",
            "email" => "aluno@php.com",
            "senha" => "Aluno",
        ],
        [
            "nome" => "Professor",
            "email" => "prof@php.com",
            "senha" => "Professor",
        ],
        [
            "nome" => "Admin",
            "email" => "admin@php.com",
            "senha" => "Admin",
        ],
    ];

    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie($usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if(!isset($_SESSION['usuario'])){
        $_SESSION['erros'] = ['Dados Inválidos'];
    }   
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
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Bem vindo!</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if (isset($_SESSION['erros'])) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" autocomplete="off">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" autocomplete="off">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        &copy; Leonardo Santos - <?= date('Y'); ?>
    </footer>
</body>

</html>