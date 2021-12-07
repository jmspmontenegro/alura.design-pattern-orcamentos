<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\GerarLog;
use Alura\DesignPattern\AcoesAoGerarPedido\GravarPedidoNoBanco;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new GerarLog());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new GravarPedidoNoBanco());
$gerarPedidoHandler->execute($gerarPedido);


