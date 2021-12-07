<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}

