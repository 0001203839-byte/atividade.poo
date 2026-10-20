<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;
    public function __construct($nome, $preco, $quantidade)
    {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
    }
    public function exibirDados()
    {
    echo "Produto: " . $this->nome . "\n";
    echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    echo "Quantidade: " . $this->quantidade . "\n";
    }
    public function calcularValorEstoque()
    {
    return $this->preco * $this->quantidade;
    }
    public function adicionarEstoque($quantidade)
    {
    $this->quantidade = $this->quantidade + $quantidade;
    }
    public function retirarEstoque($quantidade)
    {
    if ($quantidade <= $this->quantidade) {
        $this->quantidade = $this->quantidade - $quantidade;
        } else {
    echo "Quantidade insuficiente em estoque.\n";
        }
    }
}
        $produto1 = new Produto("Teclado", 150.00, 4);
        $produto2 = new Produto("Mouse", 80.00, 10);
        $produto3 = new Produto("Monitor", 900.00, 3);
        $produtos = [$produto1, $produto2, $produto3];
        echo "==============================\n";
        echo "PRODUTO\n";
        echo "==============================\n";
        foreach ($produtos as $produto) {
    $produto->exibirDados();
    $total = $produto->calcularValorEstoque();
    echo "Valor em estoque: R$ " . number_format($total, 2, ',', '.') . "\n\n";
}
        echo "==============================\n";
        echo "TESTE DE ESTOQUE\n";
        echo "==============================\n";

        $produto1->adicionarEstoque(3);
        echo "Depois de adicionar 3 unidades:\n";
        $produto1->exibirDados();
        echo "\n";

        $produto1->retirarEstoque(5);
        echo "Depois de retirar 5 unidades:\n";
        $produto1->exibirDados();
        echo "\n";

        echo "Tentando retirar 20 unidades:\n";
        $produto1->retirarEstoque(20);
        $produto1->exibirDados();
