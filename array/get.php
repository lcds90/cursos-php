<div class="titulo">$_GET</div>

<?php 
// http://localhost:2000/view.php?dir=array&file=get&nome=leo
print_r($_GET);
echo "<br>{$_GET['nome']}";