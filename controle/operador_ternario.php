<div class="titulo">Operador Ternário</div>

<?php

$idade = 70;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
echo $status;
echo '<br>';
$idade = 10;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
echo $status;

#$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de Idade' ? 'Maior de Idade' : 'Menor de Idade'; 