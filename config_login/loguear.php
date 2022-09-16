<?php

include('conexion.php');

$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
$clave=mysqli_real_escape_string($conexion,$_POST['clave']);

$query=("SELECT count(*) as contar, usuario, estado_usuario FROM usuarios_nueva WHERE usuario='$usuario' and contrasena='$clave'");
$consulta=mysqli_query($conexion,$query);
$array=mysqli_fetch_array($consulta);

    if ($array['contar']>0){
        iniciarSesion($array);
    }else{
        header("location:../login.php?fallo=true");
    }


function iniciarSesion($array){
    include('conexion.php');

    if ($array['estado_usuario']==='Activo'){
         session_start();
        $_SESSION['usuario_login']=$array['usuario'];
        header("location: ../home.html");
    }else{
        header("location:../login.php?inactivo=true"); 
    }
}
 
?>