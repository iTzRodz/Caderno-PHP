<?php
require_once 'C:\xampp\htdocs\Caderno-PHP\Alura\src\Cpf.php';

class Titular
{
    private $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
       return $this->cpf->getCpf();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNome(string $nome)
    {
        if(strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 letras";
            exit();
        }
    }
}
?>