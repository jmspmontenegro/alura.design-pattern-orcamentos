<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Ippf;
use Alura\DesignPattern\Impostos\Icpp;
use Alura\DesignPattern\Orcamento;


require 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->setValor(300);
$orcamento->setQuantidadeItens(12);


$calculadora = new CalculadoraDeImpostos();

$impostos = [
    'ICMS' => new Icms(),
    'ISS' => new Iss(),
    'IPPF' => new Ippf(),
    'ICPP' => new Icpp(),
];

echo "<br>Total:<b>" . $orcamento->getValor() . '</b>';
foreach($impostos as $nomeDoImposto => $imposto){
    
    echo "<br><br>{$nomeDoImposto}:" . $calculadora->calcula($orcamento, $imposto);
    $orcamento->setValor($orcamento->getValor() + $calculadora->calcula($orcamento, $imposto));
    echo "<br>Total:<b>" . $orcamento->getValor() . '</b>';
}

