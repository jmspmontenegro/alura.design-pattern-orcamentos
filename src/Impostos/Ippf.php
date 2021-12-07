<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\ImpostoCom2Aliquotas;
use Alura\DesignPattern\Orcamento;

class Ippf extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->getValor() > 300 && $orcamento->getQuantidadeItens() > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.025;
    }
}
