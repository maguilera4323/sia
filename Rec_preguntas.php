<!doctype html>
<html lang="es">
  <head>
  	<title>Recuperación por Preguntas de Seguridad</title>
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
		<form action="config_login/validacion_respuesta.php" method="POST" id="formlc">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/CityCoffe.jpeg);"></div>
                  
                    <?php
                    if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                    {
						header("refresh:5;url=login.php");

						echo '<div class="alert alert-danger text-center" role="alert">
						Respuesta inválida, su usuario ha sido bloqueado. Redirigiendo
						a la página de login...
					  	</div>';
                    }
                    ?>
					<br>
				<h3 class="text-center mb-0">Recuperar por Preguntas</h3>
				<br>
		      	<p class="text-center">Seleccione una pregunta de la lista y responda correctamente.</p>
				  <select class="form-select form-select-sm" aria-label=".form-select-sm examplejustify-content-center " name="preguntas" id="preguntas">
				    <option selected>Seleccione una pregunta</option>
				    <option value="Cual es su deporte favorito?">¿Cual es su deporte favorito</option>
					<option value="Nombre de su mascota">¿Nombre de su mascota?</option>
					<option value="Lugar de nacimiento">¿Lugar de nacimiento?</option>
					<option value="Comida favorita">¿Comida favorita?</option>
                 </select>
				<form action="#" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="respuesta" placeholder="Respuesta" required />
		      		</div>
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Enviar Respuesta</button>
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

