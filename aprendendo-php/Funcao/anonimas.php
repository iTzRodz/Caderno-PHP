<?php
$soma = function(int $a, $b) {
    return $a + $b;
};
echo $soma(9, 8) . "<br>";

$dividir = function($num1, $num2) {
    return $num1 / $num2;
};


function executar($a, $b, $op, $operacao) {
    $resultado = $operacao($a, $b);
    echo "$a $op $b = $resultado ";
    
};

executar(2, 6, "+", $soma) . "<br>";
executar(12, 6, "/", $dividir);

?>