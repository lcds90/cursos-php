<div class="titulo">Escrever Arquivo</div>
<?php include('teste.txt');?>
<?php 
$arquivo = fopen('api/teste.txt', 'w');
fwrite($arquivo, "Valor inicial \n");
$str = "Segunda linha \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'w'); // sobrescreve arquivo
fwrite($arquivo, "Valor inicial novamente \n");
$str = "Segunda linha novamente \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'a'); // append, adicionar novo conteudo
fwrite($arquivo, "Valor inicial novamente colado \n");
$str = "Segunda linha novamente colado \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'x'); // stream, para trabalhar com arquivos novos somente