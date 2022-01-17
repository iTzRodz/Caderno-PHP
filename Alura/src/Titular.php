<?php

class Titular extends Pessoa
{
    private Endereco $endereco;
    
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

}
?>