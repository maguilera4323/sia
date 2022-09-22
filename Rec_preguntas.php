<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación por Preguntas de Seguridad</title>
    <link rel="stylesheet" href="css/RCstyle.css">
</head>
<body>
    <div class="formulario">
        <img src="images/CityCoffe.jpeg" width="100" height="100">
        <h1>Seleccione una pregunta</h1>
        <?php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
                    echo "<style>
                    div {color:white; padding:13px; background-color:red;}
                    </style>
                    <div>Usuario no existe </div>";
                }
            ?>        
            <br>
        <form action="config_login/validacion_respuesta.php" method="POST">
            <select name="preguntas" id="preguntas">
                <option value="Cual es su deporte favorito?">¿Cual es su deporte favorito</option>
                <option value="Nombre de su mascota">¿Nombre de su mascota?</option>
                <option value="Lugar de nacimiento">¿Lugar de nacimiento?</option>
                <option value="Comida favorita">¿Comida favorita?</option>
            </select>
                <p><input type="text" name="respuesta" placeholder="Ingrese la respuesta" required /></p>
                <input type="submit" class="btn" value="Enviar" />
            </form>
            <br>
        <form action="Rec_clave.php">
            <input type="submit" class="btn-1" value="Cancelar" />
        </form>
     </div>
  </div>
</body>
</html>
