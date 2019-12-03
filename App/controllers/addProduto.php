<?php 
require_once '../../vendor/autoload.php';

$cliente = new App\Model\Cliente();
$produto = new \App\Model\Produto();
$produtoDao = new \App\Model\ProdutoDao();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$qnt = $_POST['qnt'];

$produto->setNome($nome);
$produto->setDescricao($descricao);
$produto->setQuantidade($qnt);

$produtoDao->create($produto);

header("Location: ../index.php");


?>