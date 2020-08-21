<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        'nome' => 'Leonardo',
        'idade' => 23,
        'naturalidade' => 'SP'
    ],
    [
        'nome' => 'Fabio',
        'idade' => 24,
        'naturalidade' => 'SP'
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['nome'];
echo '<br>' . $dados[1]['nome'];

$dados[] = [
    'nome'=> 'Leoparda',
    'idade'=>30,
    'naturalidade'=> 'pao'
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['nome'];
print_r($dados[2]);

unset($dados[2]);
print_r($dados);