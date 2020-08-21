<div class="titulo">Sessão</div>


<?php
session_start();
print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Leo';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'leo@leo.com';
}

?>

<p>
    <a href="/session/basico_alterar.php">
        Alterar Sessão
    </a>
</p>