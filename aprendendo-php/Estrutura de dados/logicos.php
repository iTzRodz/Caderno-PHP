<?php
echo "<p>Porta and<br> Simbolo and (e) pode usar  ---> && e and os dois estão corretos </p><hr><br>";
//AND
var_dump(true and true);
var_dump(true && false);
echo "<br>";
echo "_____________________________________________<br>";

//OR
echo "<br>Porta OR representado por ||<hr> <br>";
var_dump(true || false);
var_dump(true or true);

//XOR (ou exclusivo)
echo "<br>Porta XOR representado pelo xor ou pelo != <hr><br>";
var_dump(true xor true);
var_dump(true xor false); //V
echo "<br>";
var_dump(false xor true); //V
var_dump(false xor false);
echo "<br>";
var_dump(true != true);
var_dump(true != false); //V
echo "<br>";
var_dump(false != true); //V
var_dump(false != false);


?>
<style>
p{
    font-size:14pt;
    margin-bottom:0px;
}
hr{
    margin-top: 0;
    
}
</style>
