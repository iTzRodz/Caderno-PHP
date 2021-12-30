<?php

echo 7/4, '<br>';
echo intdiv(7, 4), '<br>'; //Vai ser 7 dividido por 4 sem as casas decimais
echo round(7 / 4), '<br>'; //Resultado da divisando será arredondado
echo 7 % 4, '<br>'  //Resto da divisao
echo 4 ** 2, '<br>' //4 elevado a segunda

<h2>Desafio de precedencia</h2>
// Precedencia de operadores:
// () => ** => / * % => + -

echo '<p>1.Qual o valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2** 3);
//R: Infinito qualquer numero /0 vai ser INF

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'b)', 4 * 5 ** 2;

?>