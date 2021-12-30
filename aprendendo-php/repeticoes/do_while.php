<?php

const valor_limite = 20;
$contador = 10;

do {
    echo "While $contador <br>";
    $contador++;
} while ($contador < valor_limite);

// Do while executa pelo menos umas vez, e depois de executar a primeira vez ele confere as condições. Se for falso ele para se for true continua
echo "<hr>";

while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if ($contador >= valor_limite) break;
    
}
?>