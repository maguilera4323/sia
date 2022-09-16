<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones de recuperación</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

   <div class="main">
        <h2>Preguntas de Seguridad</h2>
        <br>

        <?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<style>
          div #hola{color:white; padding:13px; background-color:red;}
          </style>
          <div id='hola'>Usuario no existe </div>";
       }
        ?>
        <br>

        <p>Seleccione la pregunta</p>
        <br>
        <form action="config_login/validacion_respuesta.php" method="POST">
            <select name="preguntas" id="preguntas">
                <option value="Cual es su equipo de futbol favorito">¿Cual es su equipo de futbol favorito</option>
                <option value="Nombre de su mascota">¿Nombre de su mascota?</option>
                <option value="Lugar de nacimiento">¿Lugar de nacimiento?</option>
                <option value="Comida favorita">¿Comida favorita?</option>
            </select>
                <p><input type="text" name="respuesta" placeholder="Ingrese la respuesta" required /></p>
                <p><input type="submit" value="Enviar" /></p>
        </form>
        <br>
    </div>

    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
</body>
</html>
