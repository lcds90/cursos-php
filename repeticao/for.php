<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}

for(; $cont <= 5; $cont++){
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

echo '<hr>';

$dias = [1=> 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
print_r($dias);
echo '<hr>';

for($i = 1; $i <= count($dias); $i++){
    echo "{$dias[$i]} <br>";
}

echo '<hr>';

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for ($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]} ";
    }
    echo '<br>';
}
