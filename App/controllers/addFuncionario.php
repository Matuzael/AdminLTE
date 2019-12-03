<?php

require_once '../../vendor/autoload.php';

$funcionario = new App\Model\Funcionario();
$funcionarioDao = new App\Model\funcionarioDao();



$nome = $_POST['nome'];
$email  = $_POST['email'];
$senha = $_POST['senha'];


$funcionario->setNome($nome);
$funcionario->setEmail($email);
$funcionario->setSenha($senha);

$funcionarioDao->create($funcionario);

header("Location: ../index");

?>