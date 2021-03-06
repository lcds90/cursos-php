<div class="titulo">Formulário</div>
<h2>Cadastro</h2>

<?php
ini_set('display_errors', 0);
if (count($_POST) > 0) {
    $erros = [];
    // isset($_POST['nome']);
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }
    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y',
            $_POST['nascimento']
        );
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida';
    }

    $salarioConfig = [
        "options" => ["decimal" => ","]
    ];
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }
}
?>


<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"
            class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" value="<?= $_POST['nome'] ?>" placeholder="Nome">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento" id="nascimento"
            class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?> " value="<?= $_POST['nascimento'] ?>" placeholder="Nascimento">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" value="<?= $_POST['email'] ?>" placeholder="Email">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="nascimento">Site</label>
            <input type="text" name="site" id="site" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" value="<?= $_POST['site'] ?>" placeholder="Site">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade Filhos</label>
            <input type="text" name="filhos" id="filhos" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" value="<?= $_POST['filhos'] ?>" placeholder="Quantidade de Filhos">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" value="<?= $_POST['salario'] ?>" placeholder="Salário">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-success btn-lg">Enviar</button>
</form>