<div class="titulo">Erros Personalizados</div>

<?php 
class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null){
        //echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException('Ainda está muito longe');
    } if ($idade > 70){
        throw new FaixaEtariaException('Já deveria estar aposetnado');
    }

    return 70 - $idade;
}

$idadeAvaliadas = [13, 30, 60 ,80];

foreach($idadeAvaliadas as $idade){
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade<br> $tempoRestante anos restantes <br>";
        echo '<hr>';
    } catch(FaixaEtariaException $e){
        echo "Não foi possivel calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
        echo '<hr>';
    }
}

echo '<br> Fim!';