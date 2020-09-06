<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>


<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define('contexto\CONSTANTE2', 456);
define(__NAMESPACE__ . '\CONSTANTE3', 789);
define('outro_contexto\CONSTANTE4', 123456789);

echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
// echo \contexto\CONSTANTE3 . '<br>';
echo constant(__NAMESPACE__ . '\CONSTANTE3');
// echo \contexto\CONSTANTE3; outra forma
echo \outro_contexto\CONSTANTE4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1,5) . '<br>';
echo soma(1,5) . '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // diretório raiz para resolver conflito de api do php