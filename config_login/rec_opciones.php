<?php

include('conexion.php');

$usuario_rec=strtoupper($_POST['usr_rec']);
$metodo_recuperacion='';
$array=array();

if (isset($_POST['rec_preguntas'])){
    $metodo_recuperacion=$_POST['rec_preguntas'];
}elseif (isset($_POST['rec_correo'])){
    $metodo_recuperacion=$_POST['rec_correo'];
} 

if (!empty($usuario_rec)){
    verificarUsuario($usuario_rec,$metodo_recuperacion);
}

function verificarUsuario($user,$recuperacion){
    include('conexion.php');
    $consulta=$conexion->prepare("SELECT COUNT(*) as registro_encontrado FROM TBL_usuarios WHERE usuario='$user'");
    $consulta->execute();
    $resultado=$consulta->fetchAll();
    foreach($resultado as $fila){
        $array['registro_encontrado']=$fila['registro_encontrado'];
    }
    
    if ($array['registro_encontrado']>0 && $recuperacion==='Por medio de email'){
        session_start();
        $_SESSION['usuario_rec']=$user;
        header("location: ../Rec_correos.php");
    
    }elseif ($array['registro_encontrado']>0 && $recuperacion==='Por preguntas de seguridad'){
        session_start();
        $_SESSION['usuario_rec']=$user;
        header("location:../Rec_preguntas.php");
    }else{
        header("location:../Rec_clave.php?fallo=true");
    }
}


?>