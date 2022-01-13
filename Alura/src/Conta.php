<?php
// function criarConta(string $cpf, string $nomeTitular, float $saldo): array
// {
//     return [
//         $cpf => [
//             'titular' => $nomeTitular,
//             'saldo' => $saldo,
//         ]
//     ];
// }
class Conta 
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valor)
    {
        if($valor > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valor;
        }
    }

    public function depositar(float $valorDeposito): void
    {
        if($valorDeposito <= 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorDeposito;
        }
    
    }
    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if($valorTransferir <= 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->sacar($valorTransferir);
            $this->depositar($valorTransferir);
        }
    }

    
}

$umaNovaConta = new Conta();
$umaNovaConta->depositar(500);

$segunda = new Conta();
$umaNovaConta->transferir(200, $segunda)
echo $segunda->saldo;
?>