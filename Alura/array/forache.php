<?php
$contaCorrente = [
    123456789 => [
        "titular" => "vinicius",
        "saldo" => 1000
    ],
    1234565689 => [
        "titular" => "Carlos",
        "saldo" => 1000
    ]
];
foreach($contaCorrente as $cpf =>$conta) {
    echo "Nome: {$conta['titular']} <br>
    conta: {$conta['saldo']} <hr>" . "<br>"; //Pegando o nome dos titulares
 
}
?>