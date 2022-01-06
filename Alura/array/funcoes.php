<?php

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
function exibirConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular, <br>$saldo </li>";
}
function depositar(array $conta, float $valorDeposito) :array 
{
    if($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibirMensagem("Valor precisa ser maior que 0");
    }
    return $conta;
}

function letrasMaiusculas(array &$conta) 
{
    $conta['titular'] = strtoupper($conta['titular']);
}
?>