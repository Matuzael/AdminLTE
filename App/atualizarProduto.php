<?php 
 require_once '../vendor/autoload.php';
$ProdutoDao = new \App\Model\ProdutoDao();
$cod = $_GET['id'];

$produto = $ProdutoDao->readOne($cod);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php 
          echo $_SESSION['nome'];
          ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Cadastro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./cadastroCliente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cliente </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./cadastroProduto.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./cadastroFuncionario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funcionário</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Listar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./listarCliente.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarProduto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produto </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarFuncionario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funcionário </p> 
                </a>
              </li>
            </ul>

            <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Vendas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./cadastroVenda.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nova venda </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listarVenda.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Vendas </p>
                </a>
              </li>
              </ul>  
          

            <li class="nav-item">
            <a href="controllers/deslogar.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Encerrar Sessão</p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><strong>Atualizar Dados do Produto </strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="col-lg-8" style="margin:auto;">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Insira as informações</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" 
              <?php echo 'action="controllers/updateProduto.php?cod=';
              echo $produto[0]['cod'];
              echo '">'; ?>
                <div class="card-body">
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Nome</label>
                       <?php echo'<input value="';
                       echo $produto[0]['nome'];
                       echo '" name="nome" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">'; ?>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <?php echo '<input value="';
                    echo $produto[0]['descricao'];
                    echo'"name="descricao" type="text" class="form-control" id="exampleInputEmail1" placeholder="Descrição">'; ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="exampleInputPassword1">Quantidade</label>
                   <?php echo '<input value="';
                    echo $produto[0]['quantidade'];
                   echo '" name="qnt" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade">'; ?>
                  </div>
                 
                </div>
         
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i>Atualizar Dados do Produto</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable"></section>

           
               
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
