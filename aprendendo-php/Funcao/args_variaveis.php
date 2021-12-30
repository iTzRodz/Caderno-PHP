<?php

function somaCompleta(...$argumento) {
    $soma = 0;
    foreach($argumento as $num ) {
        $soma += $num;
        print_r($argumento);
    }
    return $soma;
}
echo somaCompleta(5, 5, 5, 5);

function membros($titular, ...$dependentes) {
    echo "Titulo: " . $titular . "<br>";
    if ($dependentes) {
        foreach($dependentes as $dep) {
            echo $dep . "<br>";
        }
    }
}

echo "<br>";
membros("Nome do titular", "Nome dependente_1" , "Nome dependente_2" , "Nome dependente_3");
?>