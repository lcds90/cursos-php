<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    // echo "Bem vindo, $nome $sobrenome!<br>";
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');
echo '<hr>';

function anotarPedido($comida, $bebida = 'Agua'){ // Sempre deixar o padrão para o final
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hambuguer');
anotarPedido('Hambuguer', 'Refrigerante');