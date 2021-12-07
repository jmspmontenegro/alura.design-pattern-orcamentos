<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\ImpostoCom2Aliquotas;
use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento) : bool
    {
        return $orcamento->getValor() > 250;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento) : float
    {
        return $orcamento->getValor() * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento) : float
    {
        return $orcamento->getValor() * 0.02;
    }
}

