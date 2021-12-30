<?php
//Se eu não passar nenhum parametro a função não vai dar erro.

function saudacao($nome="Senhor(a)", $sobrenome="Cliente"){
    echo "Bem vindo! {$nome}  {$sobrenome}";
    // return $nome . $sobrenome; Consigo fazer return com duas variaveis 
}

saudacao();
?>