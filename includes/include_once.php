<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variavel = '{$variavel_once}.<br>";
$variavel_once = "Variavel alterada";
echo "Variavel = '{$variavel_once}.<br>";

include('include_once_arquivo.php'); // arquivo "reseta" variavel
echo "Variavel = '{$variavel_once}.<br>";

include_once('include_once_arquivo.php'); // função definida aepnas uma vez
echo "Variavel = '{$variavel_once}.<br>";

require_once('include_once_arquivo.php');
echo "Variavel = {$variavel}<br>";
