<?php 

require_once "../../vendor/autoload.php";
$clienteDao = new \App\Model\clienteDao();

$vendaDao = new \App\Model\vendaDao();
$venda = new \App\Model\Venda();


$cliente = $_POST['cliente'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$venda->setCliente($cliente);
$venda->setProduto($produto);
$venda->setQuantidade($quantidade);
$venda->setValor($valor);

$vendaDao->create($venda);

header("Location: ../listarVenda.php")






?>