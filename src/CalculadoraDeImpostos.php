<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto) : float
    {
        return $imposto->calculaImposto($orcamento);
    }
}

