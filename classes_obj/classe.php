<div class="titulo">Primeira Classe</div>

<?php 
class Cliente {
    public $nome = 'Anônimo'; // visivel fora da classe
    public $idade = 18;

    public function apresentar_e(){
        echo "Nome: {$this->nome} e Idade: {$this->idade}<br>";
    }

    public function apresentar_r(){
        return "Nome: {$this->nome} e Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->apresentar_e();

$c2 = new Cliente;
$c2->nome = 'Leonardo';
$c2->idade = 15;
echo $c2->apresentar_r();