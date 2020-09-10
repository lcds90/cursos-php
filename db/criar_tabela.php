<div class="titulo">Criar Tabela</div>

<?php 

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE, 
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT,
    PRIMARY KEY(id)
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();