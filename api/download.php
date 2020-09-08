<div class="titulo">Download</div>

<?php
//session_start();

$arq = $_SESSION['arquivos'] ?? [];

$pasta = __DIR__;
$nomeArq = $_FILES['arquivo']['name'];
$arquiv = $pasta . $nomeArq;
$tmps = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmps, $arquiv)) {
    echo "<br> Arquivo válido e enviado com sucesso.";
    $arq[] = $nomeArq;
    $_SESSION['arquivos'] = $arq;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arq as $arquivo) : ?>
        <li>
            <a href="<?= __DIR__ . $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<style>
input, button {
        font-size:1.2rem;
    }
</style>