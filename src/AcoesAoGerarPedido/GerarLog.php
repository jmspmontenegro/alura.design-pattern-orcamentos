<?php
namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class GerarLog implements AcaoAposGerarPedido
{

    public function executaAcao(Pedido $pedido)
    {
        echo "Log gerado com sucesso";
    }

}