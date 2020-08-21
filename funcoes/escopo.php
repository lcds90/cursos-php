<div class="titulo">Função & Escopo</div>

<?php 
function imprimirMensagens(){
    echo 'Olá';
    echo ' Teste!<br>';
}

imprimirMensagens();
imprimirMensagens();

echo '<hr>';

$var = 1;

function trocaValor(){
    $var = 2;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

echo '<hr>';

function trocaValorDeVerdade(){
    global $var;
    $var = 3;
}

echo "Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";
echo '<hr>';
var_dump(trocaValorDeVerdade());