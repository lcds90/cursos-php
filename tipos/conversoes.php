<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

echo '<h2>Int para Float</h2>';
echo '<br>';
var_dump(PHP_INT_MAX + 1);

echo '<br>';
var_dump(1+1.0);

echo '<br>';
// casting, conversão explicita
var_dump((float) 3);

// float para int, informações são perdidas
echo '<h2>Float para Int</h2>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8, 10)); // truncar
var_dump(intval('11111101010')); // truncar
var_dump(intval(2.12)); // truncar
echo '<br>';
var_dump((int)round(2.8));
var_dump(round(2.8));

// operações com string
echo '<h2>Operações com String</h2>';
echo '<p>Strings</p>';
var_dump(3 + '2'); // forma implicita e reconhece sem realizar soma
var_dump("3" . 2); // forma implicita e reconhece sem realizar soma
echo '<br>' . is_string("3" . 2);
#echo '<br>' . is_string("3" + 2);
echo '<br>';
var_dump(1 + 'cinco');
echo '<br>';
var_dump(1 + '5 cinco');
echo '<br>';
var_dump('cinco' + 1);
echo '<br>';
var_dump(1 + '2 + 5');
echo '<br>';
var_dump(1 + '3.5');
echo '<br>';
var_dump(1 + '-3.2e1');
var_dump(1 + '-3.2e2');
var_dump(1 + '-3.2e3');
echo '<br>';
var_dump((int) '10.5');
echo '<br>';
var_dump((float) '10.5');