<?php
class Funcionario extends Pessoa
{
    private string $cargo;
    
    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }
    
    public function getcargo()
    {
        return $this->cargo;
    }

}

?>