<?php

include('conexion.php');

$usuario=mysqli_real_escape_string($conexion,(strtoupper($_POST['usuario'])));
$clave=mysqli_real_escape_string($conexion,(strtoupper($_POST['clave'])));

$query=("SELECT count(*) as contar, usuario, estado_usuario FROM usuarios WHERE usuario='$usuario' and contrasena='$clave'
GROUP BY usuario, estado_usuario LIMIT 1");
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
        header("location: ../home.php");
    }else{
        header("location:../login.php?inactivo=true"); 
    }
}
 
?>