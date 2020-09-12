<div class="titulo">PDO: Alterar Registro</div>

<?php 

require_once "pdo_conexao.php";

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Beleza',
    '1990-12-12',
    'blz@blz.com',
    'http://blz.bz',
    1,
    12000,
    13
]);

if($resultado){
    echo "Atualizado!";
} else {
    print_r($stmt->errorInfo());
}