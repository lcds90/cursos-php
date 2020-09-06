<div class="titulo">Desafio dos 7 Erros</div>

<?php 
interface Template {
    public function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {

    public function metodo1(){
        echo 'Esté é o método necessario';
    }

    public function metodo2($parametro){
        echo "Este é o parametro necessario -> {$parametro}";
    }
}

class Classe extends ClasseAbstrata {

    function __construct($parametro){
        echo "Eu fui construido com o parametro -> {$parametro}";
    }

    public function metodo3(){
        echo 'Estou funcionando!';
    }

}

$exemplo = new Classe('Parametro');
echo '<br>';
$exemplo->metodo1();
echo '<br>';
$exemplo->metodo2('Esté é o parametro que passei');
echo '<br>';
$exemplo->metodo3();