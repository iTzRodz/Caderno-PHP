<?php

$impressao = ' ';
$validar = ' ';
for($i = 1; $i < 5 ; $i++) { 
    $impressao .= '#';
    echo "$impressao <br>";
    $validar = true;
}
echo '<hr>';
for($a = '#'; $a !=='#####'; $a .= '#'){
    echo "$a <br>";
}
?>