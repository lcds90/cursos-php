<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
    
}
class ArrozAGrega extends Arroz {
    
}
class Feijao extends Comida {

}
class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Comida $comida){ // polimofirsmo é aplicada aqui, pode prosseguir sendo subclasse
        $this->peso += $comida->peso;
    }
}

$comida1 = new Arroz();
$comida1->peso = 0.65;

$comida2 = new ArrozAGrega();
$comida2->peso = 0.25;

$comida3 = new Sorvete();
$comida3->peso = 10.5;

$p = new Pessoa(83.45);
$p->comer($comida1);
$p->comer($comida2);
$p->comer($comida3);

echo $p->peso;
