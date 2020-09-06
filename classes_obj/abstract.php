<div class="titulo">Classe Abstrata</div>

<?php

// exemplo: classe abstrata -> celular // classe normal -> motorola, iphone, samsung
// não pode ser instaciada, classe abstrata só server para ser herdada.

abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);

}

abstract class FilhaAbstrata extends Abstrata {
    
    //transformo método abstrato em concreto
    public function metodo1(){
        echo "Executando método 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($param){
        echo "Executando método 2 com parametro $param <br>";
    }

    public function metodo3(){
        echo "Executando método 3 <br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
echo '<hr> Parametro Interno <br>';
$c->metodo1();
// $c->metodo2('naoPode') devido protected somente por herança
echo '<hr> Parametro Externo Protegido <br>';
$c->metodo3();

echo "<hr>";
var_dump($c);
echo "<br>";
var_dump($c instanceof Concreta);
echo '<br>';
var_dump($c instanceof FilhaAbstrata);
echo '<br>';
var_dump($c instanceof Abstrata);