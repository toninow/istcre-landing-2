<?php
    session_start(); //Iniciar una nueva sesi��n o reanudar la existente
    include('config/config.php');
    include('includes/funcs.php');
	
	if(isset($_SESSION["id"])){ //En caso de existir la sesi��n redireccionamos
		header("location: ./dashboard.php");
	}
	
	$errors = array();
	
	if(!empty($_POST))
	{
		$usuario = $con->real_escape_string($_POST['username']);
		$password = $con->real_escape_string($_POST['password']);
		
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);	
	}
?>

<!DOCTYPE html>
<html lang="es-EC">
<head><meta charset="gb18030">
<!-- Metadata container -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Panel">
    <meta name="author" content="Instituto Superior Tecnol��gico Cruz Roja Ecuatoriana">
    <title>Administrador DEC</title>
    <meta name="keywords" content="">
    <meta name="robots" content="noindex">
<!--===============================================================================================-->	
<link rel="icon" href="./assets/images/life_star.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="./assets/css/sweetalert2.css"></script>
<script src="./assets/js/sweetalert2.js"></script>
<script src="./assets/js/block.input.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					<div class="login-main-text">
					    <div  align="center" style="margin-left: 30%; margin-bottom: 15px"> 
                        <img src="./assets/images/lolas.png" alt="" style="width:100%; margin:auto;">
                        </div>
          </div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Campo obligatorio">
						<input class="input100" type="text" name="username" placeholder="Nombre de usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Campo obligatorio">
						<input class="input100" id="passinput" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						
					</div>
					<div class="wrap-input100 validate-input m-b-16">
					<input type="checkbox" onclick="myFunction()">Mostrar Password    
					</div>
					
					<div class="col-12 text-right">
          </div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Iniciar
						</button>
					</div>
				</form>
				<?php echo resultBlock($errors); ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script>
        function myFunction() {
          var x = document.getElementById("passinput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>
	
<!--===============================================================================================-->
	<script src="./assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/bootstrap/js/popper.js"></script>
	<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./assets/js/main.js"></script>

</body>
</html>