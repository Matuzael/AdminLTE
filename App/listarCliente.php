<?php 
session_start();


if(!isset($_SESSION['nome'])):
  header("Location: login.php");
endif;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Controle de Vendas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/moeda.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Controle de Vendas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/usuario.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block"><?php 
          echo $_SESSION['nome'];
          ?></a>
        </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <img src="img/add.png" />
              <p>
                Cadastro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./cadastroCliente.php" class="nav-link ">
                <img src="img/cliente.png" />
                  <p>Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./cadastroProduto.php" class="nav-link">
                <img src="img/produto.png" />
                  <p>Produto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./cadastroFuncionario.php" class="nav-link">
                <img src="img/funcionario.png" />
                  <p>Funcionário</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <img src="img/listar.png" />
              <p>
                Listar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./listarCliente.php" class="nav-link ">
                <img src="img/cliente.png" />
                  <p>Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarProduto.php" class="nav-link">
                <img src="img/produto.png" />
                  <p>Produto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarFuncionario.php" class="nav-link">
                <img src="img/funcionario.png" />
                  <p>Funcionário </p>
                </a>
              </li>
              </ul>

              <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <img src="img/vendas.png" />
              <p>
                Vendas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./cadastroVenda.php" class="nav-link">
                <img src="img/nova-venda.png" />
                  <p>Nova venda </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarVenda.php" class="nav-link">
                <img src="img/lista-vendas.png" />
                  <p>Listar Vendas </p>
                </a>
              </li>
              </ul>  

              <li class="nav-item">
            <a href="controllers/deslogar.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text"> Encerrar Sessão </p>
            </a>
          </li>







        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listagem de Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
              
            
          
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

          

              <!-- /.card-header -->
              
              <div style={} 
              class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>CPF</th>
                      <th>Ações</th>
                
              
                    </tr>
                  </thead>
                  <tbody>

              <?php 
                require_once '../vendor/autoload.php';
                $ClientesDao = new \App\Model\ClienteDao();
                $clientes = $ClientesDao->read();

                foreach($clientes as $cliente):
                echo   '<tr>
                <td>'.$cliente['id'].'</td>
                <td>'.$cliente['nome'].'</td>
                <td>'.$cliente['email'].'</td>
                <td>'.$cliente['cpf'].'</td>
                <td><a href=controllers/removerCliente.php?id=';
                echo $cliente['id'];
              echo'> <img src="img/remover.png"/></a>

              <a href=atualizarCliente.php?id=';
              echo $cliente['id'];
            echo'> <img src="img/atualizar.png"/></a>
              </td>
                </tr>';
                endforeach;
              ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
