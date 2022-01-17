<?php
class Pessoa
{
    public string $nome;
    public Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
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

    public function validaNome(string $nome)
    {
        if(strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 letras";
            exit();
        }
    }
}
?>