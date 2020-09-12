<div class="titulo">Excluir Registro - II</div>

<?php

require_once "conexao.php";

$sql = "SELECT id, nome, email, nascimento FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($_GET['excluir']){
    $excluir = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluir);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
    <?php foreach($registros as $registro): ?>

        <tr>
        <td><?= $registro['id']?></td>
        <td><?= $registro['nome']?></td>
        <td><?= $registro['email']?></td>
        <td>
        <?=date('d/m/Y', strtotime($registro['nascimento']));?>
        </td>
        <td>
        <a href="/cursos-php/view.php?dir=db&file=excluir02&excluir=<?= $registro['id']?>" class="btn btn-danger">
            Excluir
        </a>
        </td>
        </tr>

    <?php endforeach; ?>
    </tbody>

</table>

<style>
    table > * {
        font-size: 1.5rem;
    }

</style>