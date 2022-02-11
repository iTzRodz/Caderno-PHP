<?php
namespace Alura\Banco\Modelo\Conta;

class Conta 
{
    private $titular;
    private float $saldo;
    private static $numeroContas = 0;
    /** 
     * $tipo 1 == Conta corrente; 2 == Poupança 
     */
    private $tipoConta;
    
    
    public function __construct(Titular $titular, int $tipoConta)
    {
       $this->titular = $titular;
       $this->saldo = 0;
       $this->tipo = $tipoConta;

       self::$numeroContas++;
    }

    public function sacar(float $valor)
    {
        if ($this->tipoConta === 1) {
            $tarifaSaque = $valor * 0.05;
            # code...
        }else {
            $tarifaSaque = $valor * 0.03;
        }
        
        $valorSaque = $valor + $tarifaSaque;
        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        $this->saldo -= $valorSaque;
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