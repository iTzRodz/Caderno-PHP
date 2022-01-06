<?php
require_once 'funcoes.php';
// include('funcoes.php')     As duas formas estão certas, funciona igual

$contaCorrente = [
    '123.400.567-89' => [
        "titular" => "vinicius",
        "saldo" => 1000
    ],
    '123.456.560-89' => [
        "titular" => "Carlos",
        "saldo" => 400
    ]
];

$contaCorrente['123.400.567-89'] = Saque($contaCorrente['123.400.567-89'], 500.00);
$contaCorrente['123.456.560-89'] = Saque($contaCorrente['123.456.560-89'], 200.00);
//-----------------------------------------------------------------------------------

$contaCorrente['123.400.567-89'] = depositar($contaCorrente['123.400.567-89'], 500.45);
$contaCorrente['123.456.560-89'] = depositar($contaCorrente['123.456.560-89'], 250.00);

// letrasMaiusculas($contaCorrente);

foreach($contaCorrente as $cpf =>$conta) 
{
    letrasMaiusculas($contaCorrente[$cpf]);
}

echo "<ul>";
foreach($contaCorrente as $cpf =>$conta) 
{
    exibirConta($conta);
   
}
echo "</ul>";
// echo '<br>' . $contaCorrente['123456789']['saldo'] -=500 ;



?>