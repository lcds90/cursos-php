<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 <= 7);
var_dump(4 < 23);
var_dump(1 != 1);
var_dump(1 <> 1);

echo '<br>';

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(11 != '11');
var_dump(11 !== '11');

echo '<hr><h2 style="margin-bottom:-5px;">Relacionais no If/Else</h2>';
$idade = 25;
if ($idade < 18) {
    echo 'Menor de idade = $idade <br>';
} else if ($idade < 65) {
    echo 'Adulto = $idade <br>';
} else {
    echo 'Terceira idade = $idade <br>';
}

echo '<p>Spaceship - Para ordenação de números</p>';
var_dump(5 <=> 3); // Retorna 1
var_dump(20 <=> 20); // Retorna 0
var_dump(10 <=> 20); // Retorna -1

echo '<p>Valores podem ser V ou F</p>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");