<div class="titulo">Interface</div>

<?php
/*
a diferença é que em interface define-se métodos e comportamentos
 que devem ser implementados a partir da classe
 não pode definir métodos protected e privados
 na classe só pode herdar de somente uma
 enquanto na interface, pode porém definir padrões
  */


interface Animal
{
    function respirar();
}

interface Canino
{
    function latir(): string;
}

interface Felino  extends Animal
{
    function miar(): string;
}

// quando classe = classe herda de outra classe
// quando implements = classe herda obrigações de implementação
class Cachorro implements Animal, Canino
{
    function respirar()
    {
        return 'cachorro respirando...';
    }

    function latir(): string
    {
        return 'au au';
    }
}

class Gato implements Felino
{
    function respirar()
    {
        return 'gato respirando...';
    }

    function miar(): string
    {
        return 'miauuuu';
    }
}

$animal1 = new Cachorro();
$animal2 = new Gato();

echo $animal1->respirar();
echo '<br>';
echo $animal1->latir();

echo '<hr>';

echo $animal2->respirar();
echo '<br>';
echo $animal2->miar();

var_dump($animal1);
echo '<br>';
var_dump($animal2 instanceof Gato);
echo '<br>';
var_dump($animal2 instanceof Felino);
echo '<br>';
var_dump($animal2 instanceof Cachorro);

