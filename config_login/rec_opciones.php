<?php

include('conexion.php');

$usuario_rec=mysqli_real_escape_string($conexion,$_POST['usr_rec']);
$metodo_recuperacion='';

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
    $query=("SELECT COUNT(*) as contar FROM usuarios_nueva WHERE usuario='$user'");
    $consulta=mysqli_query($conexion,$query);
    $array=mysqli_fetch_array($consulta);
    
    if ($array['contar']>0 && $recuperacion==='Por medio de email'){
        session_start();
        $_SESSION['usuario_rec']=$user;
        header("location: ../Rec_correo.html");
    
    }elseif ($array['contar']>0 && $recuperacion==='Por preguntas de seguridad'){
        header("location:../Login.php");
    }else{
        header("location:../Rec_clave.php?fallo=true");
    }
}


?>