<div class="titulo">Retornando Funções</div>

<?php 
function soma($a){
    return function($b) use ($a){ // informar que precisa utilizar $a
        return $a + $b;
    };
}

echo soma(31)(20);
$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);

