<div class="titulo">Comparação de Arrays</div>

<?php 

$arr1 = ['nome'=> 'maria', 'idade'=> 20];
$arr2 = ['nome'=> 'maria', 'idade'=> 20];
echo '<br>';
var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome'=> 'maria'];

echo '<br>';
var_dump($arr1 == $arr3);
echo '<br>';
var_dump($arr1 === $arr3);
echo '<br>';
var_dump($arr1 != $arr3);
echo '<br>';
var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade'=> '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); // verdadeiro mesmo apesar do tipo diferente
echo '<br>';
var_dump($arr1 === $arr4); // falso devido tipo diferente

// leva em consideracao tamanhos dos array e seus tipos