<?php

require_once '../../vendor/autoload.php';

$cliente = new App\Model\Cliente();
$clienteDao = new App\Model\ClienteDao();

echo "<pre>". var_dump($_POST)."</pre>";

$nome = $_POST['nome'];
$email  = $_POST['email'];
$cpf = $_POST['cpf'];


$cliente->setNome($nome);
$cliente->setEmail($email);
$cliente->setCpf($cpf);

$clienteDao->create($cliente);

header("Location: ../index");

?>