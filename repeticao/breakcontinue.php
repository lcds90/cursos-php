<div class="titulo">Break e Continue</div>

<?php
$cont = 16;
for (;;) {
    echo "$cont <br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
} // laço infinito

echo '<br><hr>';

echo 'Somente pares: <br>';
for (;;) {
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}
echo '<br><hr>';
echo 'Somente impares: <br>';
foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo "Fim";
