<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<!-- Document Meta
    ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="zytheme" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Multi-purpose Business html5 landing page">
	<link href="assets/images/favicon/favicon.png" rel="icon">

	<!-- Fonts
    ============================================= -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800' rel='stylesheet' type='text/css'>

	<!-- Stylesheets
    ============================================= -->
	<link href="assets/css/external.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/form.css" rel="stylesheet">
	<link href="assets/css/counter.css" rel="stylesheet">
	<link href="assets/css/footer.css" rel="stylesheet">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	<!-- Document Title
    ============================================= -->
	<title>FORMULARIO - ISTCRE - LANDING</title>

	<!--sweet alert============================================= -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
</head>

<body class="body-scroll">
	<a id="button"></a>
	<?php
	session_start();
	include('./config/config.php');
	//Generación de código ramdom para CSRF Token
	if (empty($_SESSION['token'])) {
		$_SESSION['token'] = bin2hex(random_bytes(32));
	}
	if (isset($_POST['sendForm'])) {
		//Verificamos el código generado
		if (!empty($_POST['oftoken'])) {
			if (hash_equals($_SESSION['token'], $_POST['oftoken'])) {
				$name = $_POST['userFirstName'];
				$lname = $_POST['userLastName'];
				$ci = $_POST['ci'];
				$phone = $_POST['phone'];
				$career = $_POST['career'];
				$email = $_POST['userEmail'];
				


				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

					$state = '0';
					$query = mysqli_query($con, "INSERT INTO tblcontact(userFirstName, userLastName, ci, phone, career, userEmail, active) 
					VALUES
            		('$name','$lname', '$ci', '$phone', '$career', '$email', '$state')");
					if ($query) :
						echo '<script>
              function alerta(){
               swal({
                 title: "Tu formulario ha sido enviado",
                 text: "muy pronto recibirás una respuesta",
                 type: "success"
               });
              }
              alerta();                   
              </script>';
						unset($_SESSION['token']);
					else :
						echo '<script>
           function alerta(){
            swal({
              title: "¡ERROR!",
              text: "Ha ocurrido un error, intenta de nuevo por favor",
              type: "error",
            });
           }
           alerta();                   
           </script>';;

					endif;
				} else {
					echo '<script>
          function alerta(){
           swal({
             title: "¡ERROR!",
             text: "El email que has ingresado no es correcto",
             type: "error",
           });
          }
          alerta();                   
          </script>';
				}
			}
		}
	}
	?>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0" nonce="24b7Ls6D"></script>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">

		<!-- Header
        ============================================= -->
		<header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
			<nav id="primary-menu" class="navbar navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="logo" href="index.html">
							<img style="width: 120px; height: 120px" class="logo-dark" src="assets/images/logo/logo-red.png" alt="appy Logo">
							<img style="width: 60px; height: 60px" class="logo-light" src="assets/images/logo/logo.png" alt="appy Logo">
						</a>
					</div>
					<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
						<ul class="nav navbar-nav nav-pos-right navbar-left nav-split">
							<li class="active"><a data-scroll="scrollTo" href="#slider">Inicio</a>
							</li>
							<li><a data-scroll="scrollTo" href="#feature2">Formularios</a>
							</li>
							<li><a data-scroll="scrollTo" href="#screenshots">Istcre</a>
							</li>
							<li><a data-scroll="scrollTo" href="https://www.cruzrojainstituto.edu.ec/escuela-de-emergencias-medicas/">Emergencias Médicas</a>
							</li>
							<li><a data-scroll="scrollTo" href="https://www.cruzrojainstituto.edu.ec/tecnologia-superior-en-gestion-del-riesgo-y-desastres/">Gestión de riesgos y desastres</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</nav>
		</header>

		<!-- Slider #1
		============================================= -->
		<section id="slider" class="section slider slider-2">
			<div class="slide--item bg-overlay bg-overlay-dark" style="border-radius: 0px 0px 216px 216px / 0px 0px 111px 111px;">
				<div class="bg-section">
					<img src="assets/images/background/istcre.png" alt="background">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="slide--logo mt-100 hidden-xs wow fadeInUp" data-wow-duration="1s">
								<img style="width: 120px; height: 120px" src="assets/images/logo/logo.png" alt="logo hero">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 pt-100 wow fadeInUp" data-wow-duration="1s">
							<div class="slide--headline">
								<h1>CARRERAS <br> TECNOLÓGICAS</h1>
							</div>
						</div>
						<div class="slide--holder" style="margin-top: 17%;">
							<div class="testbox">
								<div class="row">
									<form method="post" onsubmit="return validarFormulario(this);">
										<h1 style="color: white;">¿NECESITAS MÁS <br> INFORMACIÓN?</h1>
										<div st>
											<h8 style="color: white;"> Déjanos tus datos y nos contactaremos contigo</h8>
										</div>
										<input type="hidden" name="oftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" onkeyup="validar(this);" data-lengthMin="1" />
										<div class="item" style="margin-bottom: 15%;">
											<input style="text-transform: uppercase;" name="userFirstName" type="text" placeholder="Nombres" onkeyup="validar(this);" data-lengthMin="4" required />
										</div>
										<div class="item" style="margin-bottom: 15%;">
											<input style="text-transform: uppercase;" name="userLastName" type="text" placeholder="Apellidos" onkeyup="validar(this);" data-lengthMin="4" required />
										</div>
										<div class="item" style="margin-bottom: 15%;">
											<input name="ci" type="text" placeholder="ci/pasaporte" onkeyup="validar(this);" data-lengthMin="10" required />
										</div>
										<div class="item" style="margin-bottom: 15%;">
											<input name="phone" type="number" placeholder="Teléfono" onkeyup="validar(this);" data-lengthMin="7" required />
										</div>
										<div class="item" style="margin-bottom: 15%;">
											<input name="userEmail" type="email" placeholder="Correo Electrónico" onkeyup="validar(this);" data-lengthMin="1" required />
										</div>
										<div style="width: 100%;">
											<div class="item" style="margin-bottom: 15%;">
												<select id="career" name="career" onkeyup="validar(this);" required>
													<option style="background-color: rgba(96, 96, 96, 0.7); color: white;">Selecciona Carrera</option>
													<option  value="EEM" style="background-color: rgba(96, 96, 96, 0.7); color: white;">Emergencias Médicas</option>
													<option  value="GRD" style="background-color:rgba(96, 96, 96, 0.7); color: white;">Gestión de riesgos y desastres</option>
												</select>
											</div>
										</div>
										<div class="btn-block">
											<input name="sendForm" type="submit" value="Enviar">
										</div>
									</form>
									<div class="admission" style="margin-top: 25%; width: 92%">
										<h3 style="color:#cccccc">FORMULARIO DE <br> ADMISIÓN</h3>
										<button style="background-color: #660000; color:white; width:100%; height: 100%" type="submit" href="/">FORMULARIO</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</div>
			<!-- .slide-item end -->
		</section>
		<!-- #slider end -->

		<!-- Feature #2
		============================================= -->
		<section id="feature2" class="section feature feature-2 text-center bg-white; margin-bottom:5%">
			<div class="container">
				<div class="row clearfix">
					<div align="left" class="wow fadeInUp" data-wow-duration="1s">
						<h2 class="heading--title">CATÁLOGOS</br>
							DE CARRERA</h2>
					</div>
					<div class="cats wow fadeInUp" data-wow-duration="1s">
						<div class="cat1 wow fadeInUp" data-wow-duration="1s">
							<img src="./assets/images/cat1.png" alt="">
						</div>
						<div class="cat2 wow fadeInUp" data-wow-duration="1s">
							<h3 style="color: #666666; margin-top:3%">GESTIÓN DE RIESGOS Y DESASTRES</h3>
						</div>
						<div style="width: 100%">
							<div align="right">
								<p style="color: #666666; padding:2%"> Educar y formar tecnólogos capaces de gestionar de manera integral riesgos de origen natural y antrópico</p>
							</div>
							<div align="right" style="color: #660000; padding:2%">
								ver más
							</div>
						</div>
					</div>
					<!-- .col-md-6 end -->
				</div>
				<!-- .row end -->
				<div class="cats wow fadeInUp" data-wow-duration="1s">
					<div class="cat1 wow fadeInUp" data-wow-duration="1s">
						<img src="./assets/images/cat2.png" alt="">
					</div>
					<div class="cat2 wow fadeInUp" data-wow-duration="1s">
						<h3 style="color: #666666; margin-top:3%">EMERGENCIAS MÉDICAS</h3>
					</div>
					<div style="width: 100%">
						<div align="right">
							<p style="color: #666666; padding:2%"> Educar y formar tecnólogos capaces de gestionar de manera integral riesgos de origen natural y antrópico</p>
						</div>
						<div align="right" style="color: #660000; padding:2%">
							ver más
						</div>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</section>
		<!-- #feature2 end -->

		<div class="clearfix pt-100"></div>


		<!-- Feature #3
		============================================= -->
		<section id="feature3" style="background-color: black;">
			<div align="center" class="row">
				<div class="col-md-3">
					<div id="box">
						<i>
							<h1 style="margin-top: 5%; font-weight:900"><span class="total"></span></h1>
						</i>
					</div>
					<div style="margin-top: -5%; margin-bottom: 5%; margin-bottom: 15%;">
						<h1 style="color: white; font-size: 20px; font-weight:700">AÑOS DE EXPERIENCIA</h1>
					</div>
				</div>
				<div class="col-md-3">
					<div id="box">
						<i>
							<h1 style="margin-top: 5%; font-weight:900"><span class="total1"></span></h1>
						</i>
					</div>
					<div style="margin-top: -5%; margin-bottom: 5%; margin-bottom: 15%;">
						<h1 style="color: white; font-size: 20px; font-weight:700">CONVENIOS INTERINSTITUCIONALES</h1>
					</div>
				</div>
				<div class="col-md-3">
					<div id="box">
						<i>
							<h1 style="margin-top: 5%; font-weight:900"><span class="total2"></span></h1>
						</i>
					</div>
					<div style="margin-top: -5%; margin-bottom: 5%; margin-bottom: 15%;">
						<h1 style="color: white; font-size: 20px; font-weight:700">ESTUDIANTES EN PROCESO DE TITULACIÓN</h1>
					</div>
				</div>
				<div class="col-md-3">
					<div id="box">
						<i>
							<h1 style="margin-top: 5%; font-weight:700"><span class="total3">+</span></h1>
						</i>
					</div>
					<div style="margin-top: -5%; margin-bottom: 5%; margin-bottom: 15%;">
						<h1 style="color: white; font-size: 20px; font-weight:700">GRADUADOS</h1>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</section>
		<!-- #feature3 end -->

		<!-- Screenshots
        ============================================= -->
		<section id="screenshots" class="section screenshots" style="margin-top: 5%;">
			<div class="container">
				<div style="width: 100%;">
					<div style="width:50%; height:120px; float:left; ">
						<h3>Publicaciones</h3>
					</div>
					<div style="width:50%; height:120px; float:right;">
						<h3 style="color: #660000;">Escuela de conducción</h3>
					</div>
				</div>
				<div style="width: 100%;">
					<div style="width:50%; height:120px; float:left;">
						<h3 style="color: #660000;">Educación continua</h3>

					</div>
					<div style="width:50%; height:120px; float:right; ">
						<h3>Bienestar Institucional</h3>
					</div>
				</div>
			</div>
			<!-- .container End -->
		</section>
		<!-- #screenshots End-->

		<!-- Footer #5
		============================================= -->
		<?php include "footer.html"; ?>
	</div>
	<!-- #wrapper end -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/counter.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/functions.js"></script>

	<script src="assets/js/validations.js"></script>

</body>




</html>