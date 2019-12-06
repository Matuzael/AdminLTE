<?php

session_start();
require_once '../../vendor/autoload.php';

$funcionario = new App\Model\Funcionario();
$funcionarioDao = new App\Model\funcionarioDao();



$nome = $_POST['nome'];
$email  = $_POST['email'];
$senha = $_POST['senha'];
$id = $_GET['id'];


$funcionario->setNome($nome);
$funcionario->setEmail($email);
$funcionario->setSenha($senha);
$funcionario->setId($id);

$funcionarioDao->update($funcionario);

header("Location: ../listarFuncionario.php");

?>