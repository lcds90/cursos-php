<div class="titulo">Arrays Constantes</div>

<?php 

const FRUTAS = array('laranja', 'abacaxi');
//FRUTAS[0]=  'na';
//FRUTAS[]=  'na';
echo FRUTAS[0];

const CARROS =  ['fiat' => 'uno','ford'=> 'fiesta'];
//FRUTAS[0]=  'na';
//FRUTAS[]=  'na';
echo '<br>';
echo CARROS['fiat'];

define('CIDADES', array("BH", 'SP'));
//CIDADES[0] = 'RJ';
echo '<br>'.CIDADES[1];