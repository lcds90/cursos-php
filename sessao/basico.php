<div class="titulo">Sessão</div>


<?php
session_start();
print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Leo';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'leo@leo.com';
}

echo 'Request_URI -> '. $_SERVER['REQUEST_URI'] . '<br>';
echo 'Query_String -> '. $_SERVER['QUERY_STRING'], '<br>';
echo 'Document_Root -> '. $_SERVER['DOCUMENT_ROOT'], '<br>';
echo 'http://' . $_SERVER['HTTP_HOST'] . '<br>';
echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<p>
    <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/cursos-php/sessao/basico_alterar.php">
        Alterar Sessão
    </a>
</p>