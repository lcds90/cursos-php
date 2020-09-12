<div class="titulo">PDO: Inserir</div>


<?php 
require_once "pdo_conexao.php";

$sql = "INSERT INTO cadastro 
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Teste',
    'teste@gmail.com',
    '1998-07-21',
    'http://teste.com.br',
    0,
    3000
)";

$conexao = novaConexao();

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}

?>

<div class="printr">
<?=
print_r(get_class_methods($conexao));
?>
</div>


<style>

    .printr {
        transform:scale(.6);
    }
</style>