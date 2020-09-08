<div class="titulo">Upload</div>

<?php print_r($_FILES);

if($_FILES && $_FILES['arquivo']){
    $pastaUpload = 'C:\xampp-7-4-9\htdocs\cursos-php\api';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo_ = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo_)){
        echo '<br> Arquivo válido e enviado com sucesso.';
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
}


?>
<form action="#" method="post"
enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size:1.2rem;
    }
</style>