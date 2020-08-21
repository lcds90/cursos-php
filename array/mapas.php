<div class="titulo">Mapas</div>

<?php 

$dados = array(
    'idade' => 25,
    'cor' => 'verde',
    'peso'=> 49.8
);

print_r($dados);

echo '<br>'.$dados['idade'];
echo '<br>'.$dados['cor'];
echo '<br>'.$dados['peso'];

$lista = array(
    "a",
    "cinco" => 'b',
    "c",
    8 => "d",
    "E",
    6 => 6,
    "G",
    8 => 'H'
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 20;
echo '<br>';
print_r($lista);