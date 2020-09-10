<div class="titulo">Inserir Registro #01</div>

<?php

require_once 'conexao.php';

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES(
    'Jaera',
    '1950-10-09',
    'jaera@php.com',
    'https://useiphp.com',
    2,
    5000.50
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Cadastrado!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();