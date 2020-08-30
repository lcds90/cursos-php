<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18){
        echo "Construtor invocado <br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!';
    }

    public function apresentar(){
        return "{$this->nome}, {$this->idade} anos <br>";
    }

}

$pessoa = new Pessoa('Luiza', 51);
echo $pessoa->apresentar();

echo '<br>';

$pessoa2 = new Pessoa('Sergio', 50);
echo $pessoa2->apresentar();

echo '<br>';

$pessoa3 = new Pessoa('Alguem');
echo $pessoa3->apresentar();
unset($pessoa3);

echo '<br>';
echo '<br>';

$pessoa4 = new Pessoa('Ninguem');
echo $pessoa4->apresentar();
$pessoa4 = null;