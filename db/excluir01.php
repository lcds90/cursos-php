<div class="titulo">Excluir Registro - I</div>

<?php 

require_once 'conexao.php';

$sql = "DELETE FROM cadastro WHERE id = 4";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();