<div class="titulo">Desafio Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$padrao = new Data();
echo $padrao->apresentar();

echo '<br>';

$data = new Data();
$data->dia = 29;
$data->mes = 8;
$data->ano = 2020;
echo $data->apresentar();