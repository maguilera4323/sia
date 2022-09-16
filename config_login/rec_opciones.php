<?php

include('conexion.php');

$usuario_rec=mysqli_real_escape_string($conexion,$_POST['usr_rec']);

if (!empty($usuario_rec)){
    verificarUsuario($usuario_rec);
}

function verificarUsuario($user){
    include('conexion.php');
    $query=("SELECT COUNT(*) as contar FROM usuarios_nueva WHERE usuario='$user'");
    $consulta=mysqli_query($conexion,$query);
    $array=mysqli_fetch_array($consulta);
    
    if ($array['contar']>0){
        session_start();
        $_SESSION['usuario_rec']=$user;
        header("location: ../Rec_correo.html");
    
    }else{
        header("location:../Rec_clave.php?fallo=true");
    }
}

?>