<?php

include('conexion.php');
session_start();

$respuesta=mysqli_real_escape_string($conexion,$_POST['respuesta']);
$preguntas=mysqli_real_escape_string($conexion,$_POST['preguntas']);
$usuario=$_SESSION['usuario_rec'];

$query=("SELECT COUNT(*) as contar FROM preguntas_usuario pu 
        inner JOIN usuarios u ON pu.id_usuario = u.id_usuario 
        inner JOIN preguntas p ON pu.id_pregunta = p.id_pregunta
WHERE pu.respuesta='$respuesta'and p.pregunta='$preguntas' and u.usuario='$usuario'");
 
$consulta=mysqli_query($conexion,$query);
$array=mysqli_fetch_array($consulta);

    if ($array['contar']>0){
        echo 'hola mundo';
        header("location: ../Login.php");

    }else{
        echo 'houston tenemos un problema';
    }
?> 