<?php 

require_once "../../vendor/autoload.php";
$ProdutoDao = new \App\Model\ProdutoDao();
$id = $_GET['id'];

$ProdutoDao->delete($id);

header('Location: ../listarProduto.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>