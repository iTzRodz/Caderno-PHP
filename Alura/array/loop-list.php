<?php

//Imprime a quantidade de itens na lista
$idadeList = [23, 19, 25, 30, 41, 18, 21];
echo count($idadeList); 

//Inserindo o valor 20 no último indice da lista 
$idadeList[] = 20; 

//Nesse exemplo consigo pegar as três primeiras idades do nosso array. Se eu precisar pegar apenas a primeira e a terceira basta eu remover a variavel $idadeMaria. 
list($idadeVinicius, $idadeMaria, $idadeSergio) = $idadeList; 
?>