<div class="titulo">Desáfio IntDiv</div>

<?php 
require_once 'desafio_arquivo.php';
use function \Desafio\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch (\Desafio\NaoInteiroException $e){
    echo 'Resultado não é um número inteiro <br>';
}
try {
    echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';





