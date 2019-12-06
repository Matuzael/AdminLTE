<?php
require_once '../../vendor/autoload.php';

$cliente = new App\Model\Cliente();
$clienteDao = new App\Model\ClienteDao();



$nome = $_POST['nome'];
$email  = $_POST['email'];
$cpf = $_POST['cpf'];
$id = $_GET['id'];

$cliente->setNome($nome);
$cliente->setEmail($email);
$cliente->setCpf($cpf);
$cliente->setId($id);

$clienteDao->update($cliente);

header("Location: ../listarCliente.php");

?>