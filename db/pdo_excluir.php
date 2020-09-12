<div class="titulo">PDO: Excluir Registro</div>

<?php 
require_once "pdo_conexao.php";
$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([14])){
    echo "Excluido com sucesso!";
} else {
    echo "Erro: ";
    print_r($stmt->errorInfo());
}