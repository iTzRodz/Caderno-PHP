<?php
$array = [
    1=> 'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sabado'
];

foreach ($array as $semana) {
    echo "$semana <br>";
}

echo '<hr>';

foreach ($array as $indice => $semana){
    echo "$indice => $semana <br>";
}

echo '<hr>';

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
    //Estou acessando os indices e pegar o valor atual x 2
}
?>