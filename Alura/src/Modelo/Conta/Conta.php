<?php

class Conta 
{
    private $titular;
    private float $saldo;
    private static $numeroContas = 0;

    public function __construct(Titular $titular)
    {
       $this->titular = $titular;
       $this->saldo = 0;

       self::$numeroContas++;
    }

    public function sacar(float $valor)
    {
        if($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 

        $this->saldo -= $valor;
    }

    public function depositar(float $valorDeposito): void
    {
        if($valorDeposito <= 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino)
    {
        if($valorTransferir <= 0) {
            echo "Valor precisa ser positivo <br>";
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
    
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function numeroDeContas(): int
    {
        return self::$numeroContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNome();
    }
}

?>