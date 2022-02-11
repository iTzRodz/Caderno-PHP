<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'), 
        'Rodolfo Carvalho', 
        new Endereco('Marília', 'Nova marília', 'Rio branco', '446')
    ), 1
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo();
?>