<div class="titulo">Traits #01</div>

<?php

trait validacao
{
    public $a = 'Valor A';
    public function validarString($str)
    {
        return isset($str) && $str != '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor B';
    private $c = 'Valor C (privado)';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class UsuarioTraits {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}

// var_dump(validacao->validarString('')); ele é somente utilizado dentro de classe

$usuario = new UsuarioTraits();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarString(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;