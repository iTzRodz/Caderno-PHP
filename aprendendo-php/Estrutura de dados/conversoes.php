<?php

//echo is_int   //Confere se é inteiro
echo '<br>';
var_dump(1 + 1.0); //O resultado vai ser float

echo '<br>';
var_dump((float) 3);

// Float para int
echo '<p>Float para int </p>';
var_dump((int) 2.8); //Posso perder valor nessa conversäo
echo '<br>';

var_dump(intval(2.8, 10));
echo '<br>';

var_dump(intval('11111110', 2)); //Sabe que está usando a base binaria e converte o valor
echo '<br>';

var_dump((int) round(2.8));

// operações com strings
echo '<p>operações com strings </p>';
var_dump(3 + "2"); // == 5
echo '<br>';
var_dump("3". 3);
echo '<br>', is_string("3". 2); // Se for == 1 é verdade
var_dump(1 + "5");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
?>