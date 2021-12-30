<?php
//Regras para conversöes

echo '<br>'.var_dump((bool) 0); //Apenas o zero é falso
echo '<br>'.var_dump((bool) 5); 
echo '<br>'.var_dump((bool) -5); 
echo '<br>'.var_dump((bool) 0.00); 
echo '<br>'.var_dump((bool) 0.001); 
echo '<br>'.var_dump((bool) ""); //Falso
echo '<br>'.var_dump((bool) "0");// Falso
echo '<br>'.var_dump((bool) "00");// Todo resto é true
?>