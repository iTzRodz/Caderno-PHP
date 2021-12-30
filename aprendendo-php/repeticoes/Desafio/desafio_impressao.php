<?php
/*
Enunciado:
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
*/

$array = [
    "aaa",
    "bbb",
    "ccc",
    "ddd",
    "eee",
    "fff"
];

for ($i=0; $i < count($array) ; $i++) { 
    if ($i % 2 == 0) {
        echo "<br>" . "{$array[$i]}";
        continue;
    }
}
echo "<hr>";

foreach ($array as $chave => $value) {
    if ($chave % 2 !== 1)  {
        echo "$value" . "<br>";
        continue;
    }
}
?>