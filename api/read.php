<div class="titulo">Lendo Arquivo</div>

<?php 
$arquivo_read = fopen('api/teste.txt', 'r');
echo '<br>';
echo fread($arquivo_read, 10);
echo '<br>';
echo fread($arquivo_read, 30);
fclose($arquivo_read);

echo '<br>';
$arquivo_read = fopen('api/teste.txt', 'r');
$arquivo_size = filesize('api/teste.txt');
echo $arquivo_size . '<br>';
echo fread($arquivo_read, $arquivo_size);
fclose($arquivo_read);

echo"<br>";

$arquivo_read = fopen('api/teste.txt', 'r');
echo fgets($arquivo_read), '<br>';
echo fgets($arquivo_read), '<br>';
echo fgets($arquivo_read), '<br>';
echo fgets($arquivo_read), '<br>';
var_dump(fgets($arquivo_read));
fclose($arquivo_read);
echo '<hr>';
$arquivo_read = fopen('api/teste.txt', 'r');
while(!feof($arquivo_read)){
    echo fgets($arquivo_read), '<br>';
}
fclose($arquivo_read);
echo '<hr>';
$arquivo_read = fopen('api/teste.txt', 'r');
$cont = 0;
while(!feof($arquivo_read)){
    echo fgetc($arquivo_read), ' ';
}
fclose($arquivo_read);

echo '<hr>';
$arquivo_read = fopen('api/teste.txt', 'r+');
echo fgets($arquivo_read), '<br>';

fwrite($arquivo_read, "\nAdicionado durante a leitura");
echo fgets($arquivo_read), '<br>';

fclose($arquivo_read);

echo "Fim!";