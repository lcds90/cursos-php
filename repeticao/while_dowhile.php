<div class="titulo">While / Do While</div>

<?php 

const VALOR_LIMITE = 5;
$cont = 0;

while($cont < VALOR_LIMITE){
    echo "while $cont <br>";
    $cont++;
}

echo '<hr>';

do{
    echo "while $cont <br>";
    $cont++;
} while($cont < VALOR_LIMITE);

echo '<hr>';

$cont = 0;
for(; $cont < VALOR_LIMITE;){
    echo "for $cont <br>";
    $cont++;
}

echo '<hr>';

$cont = 0;

while(true){ //laço infinito
    echo "while(true) $cont <br>";
    $cont++;
    if($cont >= VALOR_LIMITE) break;
}