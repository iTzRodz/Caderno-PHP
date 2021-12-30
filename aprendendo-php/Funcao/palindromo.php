<?php

$nome = "abccba";
$nomeConvertido = strtolower($nome);
Palindromo($nomeConvertido);

function Palindromo($nomeConvertido) {
    $ultimoIndice = strlen($nomeConvertido) - 1;
    
    for ($i=0; $i <= strlen($nomeConvertido); $i++) { 
        if ($nomeConvertido[$i] !== $nomeConvertido[$ultimoIndice - $i]) {
            return 'Não';
        }
        return 'Sim é um Palindromo <br>';
    }
}
echo Palindromo($nomeConvertido);

#Outra forma de fazer

function NovoPalindromo($Palavra) {
    $converterPalavra = strtolower($Palavra);
    return $converterPalavra === strrev($converterPalavra) ? 'Sim' : 'Não'; //Operador ternário
}

echo NovoPalindromo('Bola');
?>
