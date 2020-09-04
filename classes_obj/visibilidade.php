<div class="titulo">Visibilidade</div>

<?php 

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Class a) Público = {$this->publico}<br>";
        echo "Class a) Protegido = {$this->protegido}<br>";
        echo "Class a) Privado = {$this->privado}<br>";
    }

    protected function mostrarHeranca(){
        echo "Fui transmitido por herança!";
    }

    private function naoMostrar(){
        echo "Não vou mostrar nada!";
    }

}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB(){
        echo "Class b) Público = {$this->publico}<br>";
        echo "Class b) Protegido = {$this->protegido}<br>";
        parent::mostrarHeranca();
    }
}

$b = new B();
$b->mostrarB();
$b->mostrarA();
//$b->mostrarHeranca();