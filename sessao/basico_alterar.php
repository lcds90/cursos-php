<?php
session_start(); // ter acesso a função, passar info de uma página para outra
print_r($_SESSION);
?>


<?php 
$_SESSION['email'] = 'leonardo@leonardo.com';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']; ?><br>
    <b>Email: </b> <?= $_SESSION['email']; ?><br>
</p>

<p>
    <a href="basico.php">Voltar</a><br>
    <a href="basico_limpar.php">Limpar Sessão</a>
</p>

