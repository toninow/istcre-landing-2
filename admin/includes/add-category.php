<?php
  session_start();
  include('config/config.php');
  error_reporting(0);
  if(!isset($_SESSION["id"])){ //Si no ha iniciado sesión redirecciona a index.php
      header("Location: index.php");
  }
  else{
  
  if(isset($_POST['submit']))
  {
  $category=$_POST['category'];
  $description=$_POST['description'];
  $status=1;
  
  $consulta=mysqli_query($con,"select  * from  tblCategories where nameCategory  = '$category' AND  active=1");
  
  $resultado = mysqli_fetch_array($consulta);
  
  if($resultado>0)
  {
      // Si es mayor a cero imprimimos que ya existe el usuario
      $msm = "¡Ya existe la categoría que intenta registrar!";
      
  }else{
  $query=mysqli_query($con,"insert into tblCategories(nameCategory,description,active) values('$category','$description','$status')");
  
  if($query)
  {
  $msg="categoría creada";
  $category="";
  $description="";
  }
  else {
  $error="intenta de nuevo porfavor"; 
  $category="";
  $description="";  
  }
  } 
  }
  
  
  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- App favicon -->
    <link rel="icon" href="../img/istcre3.png">
    <!-- App title -->
    <title>Portal web - CIE</title>
    <!-- App css -->
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
      <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
      <?php include('includes/leftsidebar.php');?>
      <!-- Left Sidebar End -->
      <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="page-title-box">
                  <h4 class="page-title">Añadir categoría</h4>
                  <ol class="breadcrumb p-0 m-0">
                    <li>
                      <a href="#">Administrador</a>
                    </li>
                    <li>
                      <a href="#">Categoría </a>
                    </li>
                    <li class="active">
                      Añadir categoría
                    </li>
                  </ol>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box">
                  <h4 class="m-t-0 header-title"><b>Categoría </b></h4>
                  <hr />
                  <div class="row">
                    <div class="col-sm-6">
                      <!---Success Message--->  
                      <?php if($msg){ ?>
                      <div class="alert alert-success" role="alert">
                        <strong>Proceso concluido exitosamente: </strong> <?php echo htmlentities($msg);?>
                      </div>
                      <?php } ?>
                      <!---Error Message--->
                      <?php if($error){ ?>
                      <div class="alert alert-danger" role="alert">
                        <strong>Ha ocurrido un error! </strong> <?php echo htmlentities($error);?>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <form class="form-horizontal" name="category" method="post">
                        <div class="form-group">
                          <label class="col-md-2 control-label">Nombre de la categoría</label>
                          <div class="col-md-10">
                            <input type="text" class="form-control" value="<?php if(isset($category)) echo $category;?>" name="category" required><span class="text-danger"><?php echo htmlentities($msm); ?></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">Descripción</label>
                          <div class="col-md-10">
                            <textarea class="form-control" rows="5" name="description" required><?php if(isset($description)) echo $description; ?></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label">&nbsp;</label>
                          <div class="col-md-10">
                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                            Guardar
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->
        <?php include('includes/footer.php');?>
      </div>
    </div>
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
<?php } ?>

