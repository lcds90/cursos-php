<div class="titulo">Desafio do Módulo</div>

<?php 

require_once('user.php');

$usuario = new Usuario('Leonardo', 23, 'lcds');
echo $usuario->apresentar();

echo '<br>';
unset($usuario);