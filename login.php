
<!DOCTYPE html>
<html lang="en">
<head>
<title> INVERSIONES INFINITO 7</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
</head>
<body>




	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  method="post" action="enter.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						ingreso
					</span>
					<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "5"){
					?>
						<div class="alert alert-danger">
							<strong>Error:</strong> Usuario o clave incorrecta
						</div>
					<?php
				}
				}
			
		?>
	

	<br><br>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="introducir usuario">
						<input id="first-name" class="input100" type="text" name="usuario" placeholder="usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="introducir clave">
						<input class="input100" type="password" name="clave" placeholder="clave">
						<span class="focus-input100"></span>
					</div>
					
					<div name="igresar" class="container-login100-form-btn">
						<button class="login100-form-btn">
							continuar
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<h2><span class="txt1">
							NOTA IMPORTANTE :
						</span>
						</h2>
						<a class="txt1">
							sistema de gestion para el control de invetario en la empresa inversiones infinito 7 el acceso esta pagina es autorizado por la empresa
						</a>
					</div>

					<div class="w-full text-center">
						<a href="registro.php" class="txt3">
							registrar
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url(images/Geek.png);"></div>
			</div>
		</div>
	</div>


	


	
	

	<div id="dropDownSelect1"></div>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>






</body>
</html>