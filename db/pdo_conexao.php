<?php 
function novaConexao($bancophp = 'curso_php'){
    $server = "127.0.0.1:3306";
    $user = 'root';
    $pass = '';

    try {
        $conexao = new PDO("mysql:host=$server;dbname=$bancophp", $user, $pass);
        return $conexao;
    } catch (PDOException $e){
        die('Erro: ' . $e->getMessage());
    }
}

