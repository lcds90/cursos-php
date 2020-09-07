<div class="titulo">Datas</div>

<?php 

echo "GMT <br> " . time() . '<br>';  
echo date('D, d \d\e M \d\e Y ') . '<br>';
echo date('D, d \d\e m \d\e Y ')  . '<br>';
echo date('d \d\e m \d\e y ')  . '<br>';
echo date('d \d\e m \d\e Y H:i A ')  . '<br>';
echo '<hr>';
echo strftime(' %A, %d de %B de %Y', time()) . '<br>';
//setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
echo strftime('%A, %d de %B de %Y', strtotime('today')) . '<br>';
echo strftime('%B') . '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha1 = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B');
$proxSemana = strtotime('+5 year');
echo strftime('%A, %d de %B de %Y', $proxSemana) . '<br>';
$dataFixa = mktime(5, 30, 50, 1, 25, 1975);
echo strftime('%A, $d de %B de %Y - %H:%M:%S', $dataFixa);

$formatoData1 = 'D, d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();
print_r($agora);
echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$tomorrow = new DateTime('-2 day');
echo strftime($formatoData2, $tomorrow->getTimestamp()) . '<br>';

$fixaData = new DateTime('1975-01-25 15:30:30');
echo strftime($formatoDataHora, $fixaData->getTimestamp()) . '<br>';

$tomorrow->modify('+1 day');
echo strftime($formatoDataHora, $tomorrow->getTimestamp()) . '<br>';

$tomorrow->modify('+1 week');
echo strftime($formatoDataHora, $tomorrow->getTimestamp()) . '<br>';

$tomorrow->setDate(2000, 5, 20);
echo strftime($formatoDataHora, $tomorrow->getTimestamp()) . '<br>';

$dataPassada = new DateTime(2000-05-17);
$dataFutura = new DateTime(2030-11-26);
$dataOutra = new DateTime(2030-11-26);

echo ($tomorrow > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($tomorrow > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo $dataOutra === $dataFutura ? 'Igual' : 'Diferente';