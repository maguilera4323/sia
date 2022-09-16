<!doctype html>
<html lang="es">
  <head>
  	<title>City Coffe Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
            <form action="config_login/loguear.php" method="POST" id="formlg">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">City Coffe</h2> -->
				</div>
			</div>
		<form action="config_login/loguear.php" method="POST" id="formlg">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/CityCoffe.jpeg);"></div>
                  
                  <?php
                    if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                    {
                        echo "<style>
                        div #alerta_datos_incorrectos{color:white; padding:13px; background-color:red;}
                        </style>
                        <div id='alerta_datos_incorrectos'>Usuario y/o contraseña invalidos </div>";
                    }
                    ?>

                 <?php
                    if(isset($_GET["inactivo"]) && $_GET["inactivo"] == 'true')
                    {
                        echo "<style>
                        div #alerta_user_inactivo{color:white; padding:13px; background-color:red;}
                        </style>
                        <div id='alerta_user_inactivo'>Usuario inactivo. Comuniquese con el administrador del sistema</div>";
                    }
                    ?>
                    <br>
		      	<h3 class="text-center mb-0">Bienvenido</h3>
		      	<p class="text-center">Ingrese sus datos de acceso</p>
						<form action="#" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="usuario" style="text-transform: uppercase" placeholder="Usuario" required />
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control" name="clave" placeholder="Contraseña" required />
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="Rec_clave.php">¿Olvidó su contraseña?</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Iniciar Sesión</button>
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
  <script src="js/funciones.js"></script>

	</body>
</html>

