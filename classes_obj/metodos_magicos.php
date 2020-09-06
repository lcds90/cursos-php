<div class="titulo">Métodos Mágicos</div>

<?php

class PessoaMagica {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor invocado!';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    } 

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: ${$atrib} <br>";
        return $atrib;
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    public function __call($metodo, $params){
        echo "Tentando executar método -> ${$metodo}.";
        echo "<br>, com os parametros: ";
        print_r($params);
    }
}

$pessoa = new PessoaMagica('Ricardo', 25); // chamando o __constructor
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<hr>'; // chamando o __toString
$pessoa->nome = "Leonardo";
$pessoa->idade = 23;

// chamando diretamente sem __call
$pessoa->apresentar(); // chamando o __toString
echo '<hr>';

$pessoa->nome; // acessa atributo diretamente sem __get
$pessoa->nomeCompleto; // chamando o __get

$pessoa->nomeCompleto = "Fui utilizado"; // chamando o __set

echo '<hr>';
$pessoa->exec();  // chamando o __call porque método não existe
echo '<br>';
$pessoa->exec(1, 'teste', true, [1, 2, 3]); // chamando o __call e recebe parametros

echo '<hr>';
$pessoa = null; // chamando o __destruct