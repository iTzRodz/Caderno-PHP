<?php
$dados = [
    "nome" => "Roberto",
    "idade" => 79
];

$dados2 = array(
    "naturalidade" => "Marilia"
);

$dadosCompleto = $dados + $dados2;

if (is_array($dadosCompleto) == true) { //Confere se é um array
    echo '<br>';
    echo '' . count($dadosCompleto) . " elementos dentro do array <br>";
    print_r($dadosCompleto);
}  else{
    echo 'Erro <br>';
}

$indice = array_rand($dadosCompleto);
echo "<br> $indice = $dadosCompleto[$indice]";
echo "<br> idade = {$dadosCompleto['idade']}";

unset($dadosCompleto["nome"]); //Removendo o nome
// sort($variavel) ordena o array, coloca ele de forma crescente
?>