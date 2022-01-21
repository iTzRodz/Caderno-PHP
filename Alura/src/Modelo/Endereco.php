<?php
namespace Alura\Banco\Modelo;

class Endereco extends Pessoa
{
    public string $cidade;
    public string $bairro;
    public string $rua;
    public string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }
}


?>
