<?php
namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Desconto;
use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->getValor() > 500)
        {
            return $orcamento->getValor() * 0.05;
        }
        
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

