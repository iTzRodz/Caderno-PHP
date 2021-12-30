<?php
function soma($numero) {
    $contador = 1;
    while ($numero > 1) {
        $contador *= $numero;
        $numero--;
    }
    return $contador;
}
echo soma(4);

?>