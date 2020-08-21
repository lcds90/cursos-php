<div class="titulo">Argumentos e Retorno</div>

<?php 
function obterMensagem(){
    return 'Seja bem vindx!';
}

$m = obterMensagem();
echo '<br>' . $m;
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>' . obterMensagemComNome('Leonardo');
echo '<br>' . obterMensagemComNome('Fabio');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>' . soma(5,5);
echo '<br>' . soma(15,55);
echo '<br>' . soma($x,$y);

function trocaValor($a, $novo){
    $a = $novo;
}

$var = 1;
trocaValor($var, 2);
echo '<br>' . $var;

function trocaValordDeVerdade(&$a, $novo){ // pegar referencia e alterar variavel
    $a = $novo;
}

$var = 1;
trocaValordDeVerdade($var, 5);
echo '<br>' . $var;

