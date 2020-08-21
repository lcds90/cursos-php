<div class="titulo">$_POST</div>

<form action='#' method="post">

<input type="text" name="nome"><br>
<input type="text" name="sobrenome"><br>
<select name="estado">
    <option value="SP">SP</option>
    <option value="RJ">RJ</option>
    <option value="MG">MG</option>
</select>
<button>Enviar</button>
</form>

<style>
    form > * {
        font-size:1.4rem;
    }
</style>

<?php 
print_r($_POST);
echo '<br>';
echo count($_POST);