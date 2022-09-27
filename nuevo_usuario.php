<!doctype html>
<html lang="es">
  <head>
  	<title>Creación de Nuevo Usuario</title>
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
            <form action="config_login/crear_usuario.php" method="POST" id="formlg">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">City Coffe</h2> -->
				</div>
			</div>
		<form action="config_login/crear_usuario.php" method="POST" id="formlg">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-9">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/CityCoffe.jpeg);"></div>
                  
		      	<h3 class="text-center mb-2">Crear Usuario</h3>

				  <?php
                    if(isset($_GET["exito"]) && $_GET["exito"] == 'true')
                    {
						header("refresh:5;url=login.php");

						echo '<div class="alert alert-success" text-center" role="alert">
							Usuario creado exitosamente. Se le redigirá a la página de Login en unos segundos...
					  	</div>';
                    }
					
					if(isset($_GET["exito"]) && $_GET["exito"] == 'false'){
						echo '<div class="alert alert-danger text-center" role="alert">
						Error desconocido
					  	</div>';
					}
                    ?>
					<br>

						<form action="#" class="login-form">
		      		<div class="form-group">
		      			<div ></div>
						Usuario
						<input type="text" class="form-control " name="usuario" style="text-transform: uppercase" placeholder="Ingrese usuario" required /> 
						Nombre de usuario
						<input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" required />
						Rol
						<select class="form-select" aria-label="Default select example" name="estado" id="estado">
							<option selected>Seleccione...</option>
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
							<option value="Bloqueado">Bloqueado</option>
						</select>
						Correo
						<input type="email" class="form-control" name="correo" placeholder="Ingrese correo" required />
						Contraseña
						<input type="password" class="form-control" name="contrasena" placeholder="Ingrese contraseña" required />
						Fecha de creación
						<input type="text" class="form-control" name="fec_creacion" placeholder="Fecha de creación" required />
						Fecha de vencimiento
						<input type="text" class="form-control" name="fec_vencimiento" placeholder="Fecha de vencimiento" required />
		      		</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Crear</button>
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

