<div class="titulo">Gerenciando Sessão</div>

<?php 
session_start();
echo session_id();

$contador = &$_SESSION['contador']; // & = Acessar referencia de memoria
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id(); // gerar nova sessão id
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}

/* 

Por questões de segurança,
é melhor regenera-lo
apesar de ser complicado,
melhor para evitar roubos de sessões

*/