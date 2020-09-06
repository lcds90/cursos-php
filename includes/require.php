<div class="titulo">Include VS Require</div>

<?php
echo "Usando include com arquivo inexistente...<br>";
// ini_set('display_errors', 1); debug sem xampp
include('arquivo_inexistente');
echo "Usando include com arquivo inexistente...<br>";
include('arquivo_inexistente.php');
echo '<br>';
echo "Usando require com arquivo inexistente...<br>";

// aplicação para de renderizar
require('arquivo_inexistente.php');
echo "Não achou mesmo...<br>";