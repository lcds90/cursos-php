<div class="titulo">Classe Abstrata</div>

<?php

// exemplo: classe abstrata -> celular // classe normal -> motorola, iphone, samsung
// não pode ser instaciada, classe abstrata só server para ser herdada.

abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);

}

abstract class FilhaAbstrata extends Abstrata {
    
}