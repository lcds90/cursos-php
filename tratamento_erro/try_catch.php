<div class="titulo">Try/Catch</div>

<?php
// echo 7 / 0;
// echo intdiv(7,0);

try {
    echo intdiv(7,0);
} catch(Error $e){
    echo 'Teve um erro aqui <br>';
} /*catch(Exception $e){
    echo 'Teve um erro aqui 2'
}*/
try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e){
    echo 'Divisão por zero <br>';
} catch (Throwable $e){
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado! <br>';
}

echo 'Execução continua porque erros foram tratados...';