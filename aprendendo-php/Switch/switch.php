<?php
$categoria ="Suv" ;
$preco = 0.0;
$carro = "";

if ($categoria === 'Luxo'){
    $preco = 25000;
    $carro = 'Mercedes';

} else if ($categoria === 'Suv') {
    $preco = 80000;
    $carro = 'Renegade';
} else if ($categoria =='Sdan'){
    $preco = 55000;
    $carro = 'Etios';
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$valueFormatado = number_format($preco, 2,);
echo "<p>Carro: $carro<br>Preço: $valueFormatado . </p>";

$categoria = 'LUXO';
switch (strtolower($categoria)) {        
    case 'luxo':{
        $preco = 250000;        //Posso abrir o block de codigo ou usar o : 
        $carro = 'Mercedes';
        break;
    }
    case 'suv':
    case 'suv basico':
        $preco = 80000;
        $carro = 'Renegade';
        break;
    case 'sedan':
        $preco = 55000;
        $carro = 'Etios';
        break;
    default: //Como se fosse o else
        $preco = 33000;
        $carro = 'mobi';
}
$valueFormatado = number_format($preco, 2,);
echo "<p>Carro: $carro<br>Preço: $valueFormatado . </p>";
?>