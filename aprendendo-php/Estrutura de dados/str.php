<?php
// Concatenação
$a = 18;

echo "Eu tenho"." $a anos <br>";
echo ("echo com"." parents");
print("<br>Usando print");

echo '<br>'. strtoupper('colocando em modo  <br>');
echo strtolower("PARANDO DE GRITAR");
echo '<br>'. ucfirst("somente a primeira letra em modo grito");
echo '<br>'. ucwords("cada espaço começa gritando");
echo '<br>'. strlen("Quantas letras eu tenho?");
echo '<br>'. mb_strlen("Não conta a pontuação, apenas letras e espaço", "utf-8");
echo '<br>'. substr("Quantas letras eu tenho?", 7,4); //Vai mostrar do indice 7 e conta ate o segundo parametro
echo '<br>'. str_replace("Fui removido", 'estou sendo colocado agora', 'Fui removido');
?>