<div class="titulo">Declarando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1,2). '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1.7, '4dois') . '<br>';
echo '<hr>';
function somar2(int $a, int $b){ // força ser int
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1,2). '<br>';
echo somar2(1.7, 2.5) . '<br>'; // converte float para int
echo somar2(1, '4dois') . '<br>'; // converte string primeira parte para int
echo '<hr>';
function somar3($a, float $b):int{ // somente o retorno será int
    echo "<span>Somando $a + $b =</span>";
    return $a + $b;
}

echo somar3(1,2). '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1.5, '4dois') . '<br>';


