<?php
$cont = 10;
for (; ;){
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        echo "Iniciando Break";
        break;
    }
}


foreach(array(1,2,3,5,6) as $valor){
    if ($valor ==6) {
        echo "<br>" . "$valor";
    }
}
?>