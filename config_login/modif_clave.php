<?php

include('conexion.php');
session_start();

$contrasena_ant=mysqli_real_escape_string($conexion,$_POST['clave_ant']);
$contrasena_nueva=mysqli_real_escape_string($conexion,$_POST['clave_new']);
$conf_contrasena_nueva=mysqli_real_escape_string($conexion,$_POST['conf_clave_new']);
$usuario=$_SESSION['usuario_rec'];

$query_select=("SELECT contrasena FROM TBL_usuarios WHERE usuario='$usuario'");
 
$consulta=mysqli_query($conexion,$query_select);
$array=mysqli_fetch_array($consulta);

    if (($array['contrasena']===$contrasena_ant) && ($contrasena_nueva===$conf_contrasena_nueva)){
        echo 'hola mundo';

        $query_update=("UPDATE TBL_usuarios set contrasena='$contrasena_nueva' where usuario='$usuario'");
        $consulta=mysqli_query($conexion,$query_update);
        header("location: ../login.php");

    }else{
        echo 'houston tenemos un problema';
    } 
?> 