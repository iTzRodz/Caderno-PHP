<?php

// Os argumentos da função somar2, vão ser inteiros, diferente da função somar3, apenas o resultado vai ser convertido para inteiro. 


function somar2(int $a, int $b) {
    return $a + $b
}

function somar3($a, $b): int {
    return $a - $b
}
?>