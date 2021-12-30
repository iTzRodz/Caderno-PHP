<?php
// colocando chaves no array, para acessar o 25 por exemplo, eu nao posso colocar o 0 (primeiro indice), preciso acessar pela chave que é idade
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.9
    
);
print_r($dados["cor"]); // Exemplo de acessar pela chave
echo '<br>';

$dados[false] = "Frase no indice 0"; // Isso ocorre pq false = 0 
$dados[true] = "Colocando essa frase no primeiro indice"; //Isso ocorre pq true = 1


echo '<br>';
print_r($dados);    // Mostrando o array todo
?>