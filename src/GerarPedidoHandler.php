<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
    private array $acoesAposGerarPedido;

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->setQuantidadeItens($this->numeroItens);
        $orcamento->setValor($this->valorOrcamento);

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable;
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        foreach($this->acoesAposGerarPedido as $acao){
            $acao->executaAcao($pedido);
        }
    }
}

