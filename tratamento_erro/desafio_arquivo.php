<?php namespace Desafio;

class NaoInteiroException extends \Exception
{

}

function intdiv($num, $num2)
{
    if ($num2 == 0) {
        //throw new  NaoInteiroException('Divisão por zero não é válida');
        throw new  \DivisionByZeroError();
    }
    if (($num % $num2) > 0) {
        throw new  NaoInteiroException('Resultado não é um número inteiro');
    }
    return $num / $num2;
}