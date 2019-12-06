<?php 

require_once "../../vendor/autoload.php";
$VendaDao = new \App\Model\VendaDao();
$id = $_GET['id'];

$VendaDao->delete($id);

header('Location: ../listarVenda.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>