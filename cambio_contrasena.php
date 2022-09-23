<!doctype html>
<html lang="es">
  <head>
  	<title>Cambio de Contraseña</title>
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
		<form action="config_login/modif_clave.php" method="POST" id="formlc">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/CityCoffe.jpeg);"></div>
                  
                    <?php
                    if(isset($_GET["exito"]) && $_GET["exito"] == 'true')
                    {
						header("refresh:5;url=login.php");

						echo '<div class="alert alert-success" text-center" role="alert">
							Contraseña cambiada exitosamente. Se le redirigirá a la página de Login en unos segundos...
					  	</div>';
                    }
					
					if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
						echo '<div class="alert alert-danger text-center" role="alert">
						La contraseña actual es inválida
					  	</div>';
					}

					if(isset($_GET["exito"]) && $_GET["exito"] == 'false'){
						echo '<div class="alert alert-warning text-center" role="alert">
						Las contraseñas no coinciden. Ingrese nuevamente la nueva contraseña
					  	</div>';
					}
                    ?>
					<br>
				<h3 class="text-center mb-0">Cambiar Contraseña</h3>
				<br>
		      	<p class="text-center">Ingrese su actual contraseña y elija una nueva contraseña.</p>
				<form action="#" class="login-form">
					<div class="form-group">
						<div class="icon d-flex align-items-center justify-content-center"><span> <i class="bi bi-eye-slash" onclick="mostrarConstrasena()"></i>
						</span> 
					</div>
					<input type="password" class="form-control" name="clave_ant" id="clave" placeholder="Contraseña actual" required />
					</div>
					<div class="form-group">
	            		<div class="icon d-flex align-items-center justify-content-center"><span> <i class="bi bi-eye-slash" onclick="mostrarConstrasena()"></i>
						</span> 
					</div>
	              	<input type="password" class="form-control" name="clave_new" id="clave" placeholder="Contraseña nueva" required />
	            	</div>
					<div class="form-group">
	            		<div class="icon d-flex align-items-center justify-content-center"><span> <i class="bi bi-eye-slash" onclick="mostrarConstrasena()"></i>
						</span> 
					</div>
	             	<input type="password" class="form-control" name="conf_clave_new" id="clave" placeholder="Confirme Contraseña Nueva" required />
	            	</div>
	            <div class="form-group">
	            	<button type="submit" name="rec_preguntas" value="Por preguntas de seguridad" class="btn form-control btn-primary rounded submit px-3">Enviar</button>
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

