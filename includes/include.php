<div class="titulo">Include</div>

<?php
echo 'Executei essa linha do arquivo include.php';
include('include_arquivo.php');
include('include_arquivo.php');

echo soma(3, 8) . '!<br>';
echo "O conteúdo da variavel é {$var}";
echo "<br> No caso de includes multiplo, a função function exists evitará o erro acontecer";