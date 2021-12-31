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

function exibirMensagem($mensagem) {
    echo " $mensagem <br>";
}

function Saque($conta, $ValorSaque) {
    if($ValorSaque > $conta["saldo"]) {
        exibirMensagem("Você não pode sacar");
    } else {
        $conta["saldo"] -= $ValorSaque;
    }
    return $conta;
}
$contaCorrente['123.456.560-89'] = Saque($contaCorrente['123.456.560-89'], 500);
$contaCorrente['123.400.567-89'] = Saque($contaCorrente['123.400.567-89'], 500);


// echo '<br>' . $contaCorrente['123456789']['saldo'] -=500 ;


foreach($contaCorrente as $cpf =>$conta) {
    ExibirMensagem("Nome: {$conta['titular']} <br>conta: {$conta['saldo']} <hr>");
}

?>