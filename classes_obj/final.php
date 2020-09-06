<div class="titulo">Modificar Final</div>

<?php

// Impedir que haja herança para evitar mudanças de comportamentos

abstract class AbstrataFinal {
    public abstract function metodo1();
    public final function metodo2($ok){
        echo "Não posso mudar<br>" . $ok;
    }
}

class ClasseFinal extends AbstrataFinal {
    
    public function metodo1(){
     echo 'Executando método 1 <br>';
     $this->metodo2('ok');
    }

    /*public function metodo2(){
        echo 'Extendendo e não vai!';
    }*/
}

$classe = new ClasseFinal('ok');
$classe->metodo1();
$classe->metodo2('teste');

echo '<hr>';


final class Unica {
    public $attr = "Valor único";
}

/*class Duplicata extends Unica {
    public $att2;
}*/

$unica = new Unica();
echo $unica->attr;
