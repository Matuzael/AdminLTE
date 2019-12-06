<?php 

require_once "../../vendor/autoload.php";
$clienteDao = new \App\Model\clienteDao();
$id = $_GET['id'];

$clienteDao->delete($id);

header('Location: ../listarCliente.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>