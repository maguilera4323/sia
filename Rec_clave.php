<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Contraseña</title>
    <link rel="stylesheet" href="css/RCstyle.css">
</head>
<body>
    <div>
    <div class="formulario">
        <form action="config_login/rec_opciones.php" method="POST">
           <img src="images/CityCoffe.jpeg" width="100" height="100">
           <h1>Olvide mi contraseña</h1>
           <?php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
                    echo "<style>
                    div {color:white; padding:13px; background-color:red;}
                    </style>
                    <div>Usuario no existe </div>";
                }
            ?>        
            <br>
           <p>Ingrese su usuario y elija la forma en que desea recuperar su clave.</p>
           <p><input type="text" class="form-control" name="usr_rec" style="text-transform: uppercase" placeholder="Usuario" required></p>
           <input type="submit" class="btn" name="rec_preguntas" value="Por preguntas de seguridad" />
           <input type="submit" class="btn-2" name="rec_correo"value="Por medio de email" />
        </form>
        <form action="Login.php">
            <input type="submit" class="btn-3" value="Cancelar" />
        </form>
        </div>
     </div>
    </div>
</body>
</html>
