<?php

include('conexion.php');
session_start();

$respuesta=$_POST['respuesta'];
$preguntas=$_POST['preguntas'];
$usuario=$_SESSION['usuario_rec'];

$consulta=$conexion->prepare("SELECT COUNT(*) as registro_encontrado FROM TBL_ms_preguntas_usuario pu 
                            inner JOIN TBL_usuarios u ON pu.id_usuario = u.id_usuario 
                            inner JOIN TBL_preguntas p ON pu.id_pregunta = p.id_pregunta
WHERE pu.respuesta='$respuesta'and p.pregunta='$preguntas' and u.usuario='$usuario'");
$consulta->execute();
$resultado=$consulta->fetchAll();
foreach($resultado as $fila){
    $array['registro_encontrado']=$fila['registro_encontrado'];
}

    if ($array['registro_encontrado']>0){
        header("location: ../cambio_contrasena.php");

    }else{
        $consulta_bloqueo=$conexion->prepare("UPDATE TBL_usuarios set estado_usuario=3 where usuario='$usuario'");
        $consulta_bloqueo->execute();
        header("location: ../Rec_preguntas.php?fallo=true");
    } 
?> 