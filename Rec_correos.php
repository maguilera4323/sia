<!doctype html>
<html lang="es">
  <head>
  	<title>Recuperación por Correo Electrónico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
		<form action="#" method="POST" id="formlc">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/CityCoffe.jpeg);"></div>
                  
                    <?php
                    if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                    {
						echo '<div class="alert alert-danger text-center" role="alert">
						El usuario ingresado no existe en el sistema
					  	</div>';
                    }
                    ?>
					<br>
				<!-- <h3 class="text-center mb-0">Recuperar Contraseña con su Correo Electrónico</h3>
				<br> -->
		      	<p class="text-center">Ingrese su correo electrónico. En unos minutos le llegará un correo con las
					instrucciones para continuar la recuperación de su contraseña
				</p>
				<form action="#" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="email" class="form-control" name="usr_rec" placeholder="Correo Electrónico" required 
						  pattern="[A-Za-z@._]+" title="Ingrese su dirección de correo electrónico sin espacios"/>
		      		</div>
				<div class="form-group">
	            	<button type="submit" name="rec_correo" value="Por medio de email" class="btn form-control btn-primary rounded submit px-3">Enviar</button>
	            </div>
				</div>
			</div>
		 </form>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="./js/funciones.js"></script>
	<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>
</html>

