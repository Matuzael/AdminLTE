<?php 
require_once '../../vendor/autoload.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$funcionarioDao = new \App\Model\FuncionarioDao();

$funcionarios = $funcionarioDao->read();

foreach($funcionarios as $credenciais):
    if($credenciais['email']==$email && $credenciais['senha']==$senha):
        session_start();
        $_SESSION['nome'] = $credenciais['nome'];
        $_SESSION['id'] = $credenciais['id'];
        header("Location: ../index.php");
    
    else:
        //echo "Erro ao logar";
    endif;
    
  
endforeach;





?>