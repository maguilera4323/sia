<?php

include('conexion.php');
session_start();

$respuesta=$_POST['respuesta'];
$preguntas=$_POST['preguntas'];
$usuario=$_SESSION['usuario_rec'];

$consulta=$conexion->prepare("SELECT COUNT(*) as contar FROM TBL_ms_preguntas_usuario pu 
                            inner JOIN TBL_usuarios u ON pu.id_usuario = u.id_usuario 
                            inner JOIN TBL_preguntas p ON pu.id_pregunta = p.id_pregunta
WHERE pu.respuesta='$respuesta'and p.pregunta='$preguntas' and u.usuario='$usuario'");
$consulta->execute();
$resultado=$consulta->fetchAll();
foreach($resultado as $fila){
    $array['contar']=$fila['contar'];
}

    if ($array['contar']>0){
        header("location: ../cambio_contrasena.php");

    }else{
        header("location: ../Rec_preguntas.php?fallo=true");

    } 
?> 