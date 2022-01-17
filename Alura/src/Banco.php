<?php

require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Pessoa.php');
require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Funcionario.php');
require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Cpf.php');

$Funcionario = new Funcionario("Romario", new Cpf("111.111.555-88"), "Desenvolvedor");
var_dump($Funcionario);


// $endereco = new Endereco("Cidade x", "Um bairro", "Minha rua", "99-h");
// $vinicius = new Titular(new Cpf("111.555.777-98"), "Romario", $endereco);
// $primeiraConta = new Conta($vinicius);

// $primeiraConta->depositar(500);
// $primeiraConta->sacar(300);

// echo $primeiraConta->recuperaNomeTitular();
// var_dump($primeiraConta);

?>