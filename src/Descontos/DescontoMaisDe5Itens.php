<?php
namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Desconto;
use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento):float
    {
        if($orcamento->getQuantidadeItens() > 5){
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

