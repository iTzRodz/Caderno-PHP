<?php
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

function exibirMensagem($mensagem) 
{
    echo " $mensagem <br>";
}

function Saque($conta, float $ValorSaque) 
{
    if($ValorSaque > $conta["saldo"]) {
        exibirMensagem("Você não pode sacar");
    } else {
        $conta["saldo"] -= $ValorSaque;
    }
    return $conta;
}

$contaCorrente['123.400.567-89'] = Saque($contaCorrente['123.400.567-89'], 500.00);
$contaCorrente['123.456.560-89'] = Saque($contaCorrente['123.456.560-89'], 500.00);
//-----------------------------------------------------------------------------------

function depositar(array $conta, float $valorDeposito) :array 
{
    if($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibirMensagem("Valor precisa ser maior que 0");
    }
    return $conta;
}

$contaCorrente['123.400.567-89'] = depositar($contaCorrente['123.400.567-89'], 500.45);
$contaCorrente['123.456.560-89'] = depositar($contaCorrente['123.456.560-89'], 200.00);


foreach($contaCorrente as $cpf =>$conta) 
{
    ExibirMensagem("Nome: {$conta['titular']} <br>
    conta: {$conta['saldo']} <hr>");
}
// echo '<br>' . $contaCorrente['123456789']['saldo'] -=500 ;



?>