<?php 

require_once "../../vendor/autoload.php";
$FuncionarioDao = new \App\Model\FuncionarioDao();
$id = $_GET['id'];

$FuncionarioDao->delete($id);

header('Location: ../listarFuncionario.php')
//$usuarios = $usuarioDao->delete();

//header("Location: ../lista.php");


?>