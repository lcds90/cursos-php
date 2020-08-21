<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string <br>';
var_dump('Eu também!');

// concatenação
echo ('<br>Nós também' . ' somos');
echo '<br>', 'Também aceito', ' vírgulas';
echo 'Número é' . 123;

echo "<br>'Teste' " . ' "Teste"' . '\'Teste\'' . "\"Teste\" " . "\\";
print('<br>Existe também a função print');
print '<br>Existe também a função print';

// Algumas funções
echo '<br>' . strtoupper('Maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantidade de letras');
echo '<br>' . mb_strlen('quantas letras', 'utf-8');
echo '<br>' . substr('Somente uma parte', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');