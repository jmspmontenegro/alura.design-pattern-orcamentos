<?php
namespace Alura\DesignPattern;

class GerarPedido implements Command
{

    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
       
    }

}

