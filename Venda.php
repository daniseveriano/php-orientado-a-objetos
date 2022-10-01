<?php

declare(strict_types=1);

class Venda
{
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorUnitario;

    public function __construct(
        string $data,
        string $produto,
        int $quantidade,
        float $valorUnitario
    ) {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }

    public function totalDoProduto() : float
    {
        return $this->quantidade * $this->valorUnitario;
    }

    public function exibirDados() : string
    {
        return
            "Data da Venda: {$this->data}
            Produto: {$this->produto}
            Unidades: {$this->quantidade}
            Valor Unitário: R$ {$this->valorUnitario}
            Total do Produto: R$ {$this->totaldoProduto()}";
    }
}

$venda = new Venda(
    "30/09/2022",
    "Óleo essencial de hortelã pimenta",
    4,
    25
);

echo $venda->exibirDados();
