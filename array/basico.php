<div class="titulo">Básico sobre Arrays</div>

<?php
$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>'.$lista[0];
echo '<br>'.$lista[1];
echo '<br>'.$lista[2];
echo '<br>'.$lista[3].'<br>';
var_dump($lista[4]);

$texto = 'Isso é um teste';
echo '<br>'.$texto[9];
echo '<br>'.$texto[1];
echo '<br>'.$texto[2];
echo '<br>'.$texto[6];
echo '<br>'.$texto[8];

// forma recomendada
echo '<br>'. mb_substr($texto, 10, 1);