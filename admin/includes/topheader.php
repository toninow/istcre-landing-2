<?php
require_once('./config/config.php');
include('./includes/funcs.php');
if(!isset($_SESSION["id"])){ //Si no ha iniciado sesi贸n redirecciona a index.php
    header("Location: index.php");
}

$idUsuario = $_SESSION['id'];

$sql = "SELECT id, userName, email FROM tblusers WHERE id = '$idUsuario'";
$result = $con->query($sql);

$row = $result->fetch_assoc();


?>     
<!DOCTYPE html>
    <html lang="en">
    <head><meta charset="gb18030">  
    </head>     
            <body>
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="../admin/dashboard.php" class="logo"><span style="color: red">DEC</span><i><img src="assets/images/life_star.png" alt="" height="30"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>                                    
                                </button>                                
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                          
                        
                            <li class="dropdown user-box">                            
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/admin_panel.png" alt="user-img" class="img-circle user-img">
                                        <h5 class="text-center navbar-nav">Bienvenido/a: <?php echo htmlentities($row['userName']);?></h5>
                                </a>
                                
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>                                        
                                        <!-- <h5>id: <?php echo htmlentities($row['id']);?></h5>  -->
                                        <h5>email: <?php echo htmlentities($row['email']);?></h5>         
                                    </li>
                              
                                    <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Cambiar contraseña</a></li>
                           
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Cerrar sesión</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <body>
