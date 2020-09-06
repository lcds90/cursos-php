<div class="titulo">Require com Retorno</div>

<?php 
$valorRetorno = require("return_usado.php");
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php'); // __DIR__ diretório atual
//var_dump($valorRetorno2);   
echo "$valorRetorno2<br>";
echo "$variavelDeclarada";