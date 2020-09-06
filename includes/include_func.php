<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');

    echo $var . '!<br>';
    echo soma(2,5) . '!<br>';
}

echo "Novamente no arquivo include_funcao<br>";
//echo soma(1,5) . '<br>';
carregarArquivo();

echo "Váriavel = '{$var}'.";
var_dump($var);

echo "Somente a função soma estará disponível no include através de função, pois é somente usada no escopo";