<?php
namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getcpf()
    {
        return $this->cpf->getCpf();
    }

    protected function validaNome(string $nome)
    {
        if(strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 letras";
            exit();
        }
    }
}
?>