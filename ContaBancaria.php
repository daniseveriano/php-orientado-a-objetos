<?php

//para começar a declarar os tipos dos valores
declare(strict_types=1);

class ContaBancaria
//propriedades (ou atributos) vão aparecer dentro deste objeto
{
    //modificadores de acesso
    //*public - torna todos os elementos da classe públicos. qualquer elemento de fora vai conseguir
    //acessar esses atributos ou métodos
    //*private - fica bloqueado, restrito à própria classe
    //*protected - similar ao private, mas permite acesso de classes que herdam da classe pai

    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    //*metodo construtor - sempre é executado quando se cria uma instancia da classe
    //relaciona os valores passados no instanciamento com as propriedades da classe
    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    //*metodo da classe ContaBancaria
    public function obterSaldo() : string
    {
        return "Seu saldo atual é de R$ {$this->saldo}";
    }

    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return "Depósito de R$ {$valor} realizado com sucesso";
    }

    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return "Saque de R$ {$valor} realizado com sucesso";
    }
}

//criando objetivo conta bancaria, instanciamento.
//momento onde vou passar os valores
$conta = new ContaBancaria(
    "Bradesco", //$banco
    "Daniele Severiano", //$nomeTitular
    "0001", //$numeroAgencia
    "784549", //$numeroConta
    0 //$saldo
);

echo $conta->obterSaldo(); //para acessar a propriedade da classe
echo PHP_EOL; //quebra de linha
echo $conta->depositar(3000);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(500);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
