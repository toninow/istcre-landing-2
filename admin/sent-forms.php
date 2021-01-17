<?php
  session_start();
  include('config/config.php');
  error_reporting(0);
  if(!isset($_SESSION["id"])){ //Si no ha iniciado sesión redirecciona a index.php
      header("Location: index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- App favicon -->
    <link rel="icon" href="../assets/images/life_star.png">
    <!-- App title -->
    <title>SADEC</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>
  </head>
  <body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
    <!-- Top Bar Start -->
    <?php include('includes/topheader.php');?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php include('includes/leftsidebar.php');?>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="page-title-box">
                <h4 class="page-title">Formularios Respondidos</h4>
                <ol class="breadcrumb p-0 m-0">
                  <li>
                    <a href="#">Administrador</a>
                  </li>
                  <li>
                    <a href="#">Formularios</a>
                  </li>
                  <li class="active">
                    Formularios Respondidos
                  </li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end row -->
          <div class="row">
            <div class="col-sm-6">
              <?php if($msg){ ?>
              <div class="alert alert-success" role="alert">
                <strong>Proceso concluido exitosamente: </strong> <?php echo htmlentities($msg);?>
              </div>
              <?php } ?>
              <?php if($delmsg){ ?>
              <div class="alert alert-danger" role="alert">
                <strong>Advertencia: </strong> <?php echo htmlentities($delmsg);?>
              </div>
              <?php } ?>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="demo-box m-t-20">
                  <div class="m-b-30">
                    <a target="_blank" href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1595640135&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d039a42b0-e4f9-b736-ad45-f35d1f52cd5d&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015">
                    <button id="addToTable" class="btn btn-success waves-effect waves-light">INGRESAR A OUTLOOK</i></button>
                    </a>
                  </div>
                  <div class="m-b-30">
                    <h4>FORMULARIOS RESPONDIDOS</h4>
                  </div>
                  <div class="table-responsive">
                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                      <thead>
                        <tr>
                        <th style="text-align:center">#</th>
                          <th style="text-align:center">Nombres </th>
                          <th style="text-align:center">CI/PASAPORTE</th>
                          <th style="text-align:center">Teléfono</th>
                          <th style="text-align:center">Correo Electrónico</th>
                          <th style="text-align:center">Carrera</th>
                          <th style="text-align:center">Hora respuesta solicitud</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $query=mysqli_query($con,"select * from tblcontact  where active=1");
                          $cnt=1;
                          while($row=mysqli_fetch_array($query))
                          {
                          ?>
                        <tr>
                          <th align="center" scope="row"><?php echo htmlentities($cnt);?></th>
                          <td align="center"><?php echo htmlentities($row['userFirstName']);?> <?php echo htmlentities($row['userLastName']);?></td>
                            <td align="center"><?php echo htmlentities($row['ci']); ?></td>
                            <td align="center"><?php echo htmlentities($row['phone']); ?></td>
                            <td align="center"><?php echo htmlentities($row['userEmail']); ?></td>
                            <td align="center"><?php echo htmlentities($row['career']); ?></td>
                            <td align="center"><?php echo htmlentities($row['updationDate']); ?></td>
                        </tr>
                        <?php
                          $cnt++;
                          } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <!-- container -->
        </div>
        <!-- content -->
        <?php include('includes/footer.php');?>
      </div>
    </div>
    <!-- END wrapper -->
    <script>
      var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>
    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
  </body>
</html>
