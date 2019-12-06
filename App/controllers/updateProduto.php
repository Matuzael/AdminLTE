<?php 
require_once '../../vendor/autoload.php';

$produto = new \App\Model\Produto();
$produtoDao = new \App\Model\ProdutoDao();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$qnt = $_POST['qnt'];
$cod = $_GET['cod'];

$produto->setNome($nome);
$produto->setDescricao($descricao);
$produto->setQuantidade($qnt);
$produto->setCod($cod);

$produtoDao->update($produto);

header("Location: ../listarProduto.php");


?>