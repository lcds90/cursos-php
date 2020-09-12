<div class="titulo">PDO: Consultar Registro</div>

<?php 

require_once "pdo_conexao.php";
$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado_num = $conexao->query($sql)->fetchAll(PDO::FETCH_NUM);
$resultado_assoc = $conexao->query($sql)->fetchAll(PDO::FETCH_BOTH);
$resultado_class = $conexao->query($sql)->fetchAll(PDO::FETCH_CLASS);
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM cadastro LIMIT :qtd OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtd', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if($stmt->execute()){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo "<hr> ID: 6<br>";

//$sql = "SELECT * FROM cadastro WHERE id = ?";
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
//$stmt->bindValue(':id', 15, PDO::PARAM_INT);
//if($stmt->execute([6])){
//if($stmt->execute()){
if($stmt->execute([':id' => 6])){
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

?>
<hr>
<div class="printr">
<?=
print_r($resultado);
?>
</div>
<hr>
<div class="printr">
<?=
print_r($resultado_num);
?>
</div>
<hr>
<div class="printr">
<?=
print_r($resultado_assoc);
?>
</div>
<hr>
<div class="printr">
<?=
print_r($resultado_class);
?>
</div>


<style>

    .printr {
        transform:scale(.6);
    }
</style>

<?= $conexao->close(); ?>