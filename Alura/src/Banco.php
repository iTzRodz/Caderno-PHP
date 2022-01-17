<?php
require_once 'C:\xampp\htdocs\Caderno-PHP\Alura\src\Conta.php';
require_once 'C:\xampp\htdocs\Caderno-PHP\Alura\src\Titular.php';

$vinicius = new Titular(new Cpf("111.555.7779-98"), "Romario");
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular();
var_dump($primeiraConta);

?>