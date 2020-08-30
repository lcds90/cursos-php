<div class="titulo">Herança</div>

<?php 
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada!<br>';
    }

    function __destruct(){
        echo 'Pessoa diz: Tchau!<br>';
    }

    public function apresentar(){
        return "{$this->nome}, {$this->idade} anos";
    }
}

class  Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuário criado!<br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchau!<br>';
        parent::__destruct();
    }

    public function apresentar(){
        echo parent::apresentar(); // função que vem da superclasse
        echo '<br>';
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos";
    }
}

$usuario = new Usuario('Leonardo', 23, 'lcds');
echo $usuario->apresentar();

echo '<br>';
unset($usuario);
