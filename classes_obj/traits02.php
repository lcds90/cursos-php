<div class="titulo">Traits #02</div>

<?php
trait validacaoTraits02
{
    public function validarString($str)
    {
        return isset($str) && $str != '';
    }
}

trait validacaoMelhorTraits02 {
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class User {
    use validacaoTraits02, validacaoMelhorTraits02 {
        validacaoMelhorTraits02::validarString insteadOf validacaoTraits02;
        //validacaoTraits02::validarString insteadOf validacaoMelhorTraits02;

        validacaoTraits02::validarString as validacaoSimples;
    }
}

$user = new User();
var_dump($user->validacaoSimples(' '));
var_dump($user->validarString(' '));