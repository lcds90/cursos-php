<div class="titulo">Map & Filter</div>

<?php 
$notas = [5.0, 7.5, 9.5, 6.7];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);
echo '<hr>';

$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);
$apenasOsAprovados1 = [];

foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados1[] = $nota;
    }
}


echo '<hr>';
print_r($apenasOsAprovados1);
// filter, retornando true or false

function aprovados($nota){
    return $nota >= 7;
}

echo '<hr>';
$apenasOsAprovados2 = array_filter($notas, aprovados);
print_r($apenasOsAprovados2);