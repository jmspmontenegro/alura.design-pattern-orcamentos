<?php
namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class GravarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido){
        echo "Pedido gerado no banco";
    }
}