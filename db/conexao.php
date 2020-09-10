<?php 

function novaConexao($banco = 'curso_php'){
    $server = "127.0.0.1:3306";
    $user = 'root';
    $pass = '';


$conexao = new mysqli($server, $user, $pass, $banco);

if($conexao->connect_error){
    die('Erro: ' . $conexao->connect_error);

    // echo ('Erro: ' . $conexao->connect_error);
    // exit();
}

return $conexao;

}