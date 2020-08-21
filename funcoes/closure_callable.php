<div class="titulo">Closure & Callable</div>

<?php 

$soma1 = 1;
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; 
echo '<hr>';
$soma1 = function ($a,  $b){
    return $a + $b;
};

function soma2($a,  $b){
    return $a + $b;
}

echo $soma1(2, 3) . ' '; // callable porque pode ser chamado
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; 
echo '<hr>';
echo soma2(2, 3) . ' '; // callable porque pode ser chamado
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>'; 
echo '<hr>';

var_dump($soma1); // objeto tipo closure


function executar($a, $b, $op, Callable $funcao){ // obrigatorio, verifiicação de callable
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
};
echo '<hr>';
executar(2, 3 , '+', $soma1);
executar(2, 3 , '+', soma2);

function executar2($a, $b, $op, Closure $funcao){ // necessita estar em classe
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
};
echo '<hr>';
executar2(22, 30 , '+', $soma1); // classe usada para representar função anonima
executar2(21, 333 , '+', soma2); 

