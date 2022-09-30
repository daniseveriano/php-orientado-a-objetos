<?php

class ContaBancaria
//propriedades (ou atributos) vão aparecer dentro deste objeto
{
    //modificadores de acesso
    //*public - torna todos os elementos da classe públicos. qualquer elemento de fora vai conseguir
    //acessar esses atributos ou métodos
    //*private - fica bloqueado, restrito à própria classe
    //*protected - similar ao private, mas permite acesso de classes que herdam da classe pai
    public $banco = "Bradesco";
    public $nomeTitular = "Daniele Severiano";
    public $numeroAgencia = "0001";
    public $numeroConta = "784549";
    public $saldo = "3000,00";
}

$conta = new ContaBancaria(); //criando objetivo conta bancaria, instanciamento.

var_dump($conta->banco); //para acessar a propriedade da classe