<?php


require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Modelo\Pessoa.php');
require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Modelo\Conta\Titular.php');
require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Modelo\Cpf.php');
require_once('C:\xampp\htdocs\Caderno-PHP\Alura\src\Modelo\Endereco.php');

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

// $Funcionario = new Funcionario("Romario", new Cpf("111.111.555-88"), "Desenvolvedor");
$endereco = new Endereco("marilia", "Bairro", " rua", "66");
$vinicius = new Titular(new Cpf("111.555.777-98"), "Romario", $endereco);

// var_dump($vinicius);
print_r($vinicius);

// $endereco = new Endereco("Cidade x", "Um bairro", "Minha rua", "99-h");
// $primeiraConta = new Conta($vinicius);

// $primeiraConta->depositar(500);
// $primeiraConta->sacar(300);

// echo $primeiraConta->recuperaNomeTitular();
// var_dump($primeiraConta);

?>