<div class="titulo">Foreach</div>

<?php 
$dias = [1=> 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($dias as $valor){
    echo "$valor <br>";
}

foreach($dias as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo '<hr>';

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matriz as $linha){
    //echo "$linha <br>";
    foreach ($linha as $valor){
        echo "$valor ";
    }
    echo '<br>';
}

echo '<hr>';


$numeros = [1, 2, 3, 4, 5];
foreach($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
echo '<hr>';
$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){ //pegar referencia de memoria para mudar o array
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);


