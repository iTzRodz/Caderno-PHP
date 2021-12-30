<?php

$variavel = 9;

function acessandoVariavel() {
    global $variavel;
    $variavel = 3;
    return $variavel;
}

echo "Valor antes da função {$variavel} <br>";

echo "Com a função -> " . acessandoVariavel();
?>