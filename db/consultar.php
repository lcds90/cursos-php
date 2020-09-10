<div class="titulo">Consultar Registros</div>

<?php 

require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0 ){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
} elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<?= 'A data de hoje é '. date('d/m/Y', time()) ?>

<table class="table table-hover table-striped">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>

<div class="printr">
    <?= print_r($registros); ?>
</div>

<style>
    table > * {
        font-size: 1.5rem;
    }

    .printr {
        transform:scale(.6);
    }
</style>