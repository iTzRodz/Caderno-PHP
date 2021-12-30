<?php
$notas = [5.8, 7.3, 5.75, 9.8, 8.9, 6.7];
$notasFinais = [];

foreach($notas as $nota) {
    $notasFinais[] = round($nota);
}

print_r($notasFinais);
echo '<br>';

$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);

?>