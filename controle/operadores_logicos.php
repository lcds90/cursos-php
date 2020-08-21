<div class="titulo">Operadores Lógicos</div>

<style>
    p {
        margin-bottom:-5px;
    }
</style>

<?php

var_dump(true);
echo '<br>';
var_dump(!true);
echo '<hr>';
echo '<h2>Tabela Verdade "AND" (E)</h2>';
echo '<p>Somente V & V para true</p>';
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo '<h2>Tabela Verdade "OR" (OU)</h2>';
echo '<p>Qualquer 1 V para true</p>';
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo '<h2>Tabela Verdade "XOR" (OU Exclusivo)</h2>';
echo '<p>Somente 1 V para true</p>';
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo '<h2>Exemplo</h2>';
$idade = 62;
$sexo = 'F';
echo '<br>';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar" . '<br>';

if($idade >= 60 && $sexo === 'F'){
    echo "Aposentadoria liberada -> $sexo";
} elseif($idade >= 65 && $sexo === 'M'){
    echo "Aposentadoria liberada -> $sexo";
} else {
    echo 'Aposentadoria negada';
}