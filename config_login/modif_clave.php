<?php

include('conexion.php');
session_start();

$contrasena_ant=$_POST['clave_ant'];
$contrasena_nueva=$_POST['clave_new'];
$conf_contrasena_nueva=$_POST['conf_clave_new'];
$usuario=$_SESSION['usuario_rec'];

$consulta_select=$conexion->prepare("SELECT contrasena FROM TBL_usuarios WHERE usuario='$usuario'");
$consulta_select->execute();
$resultado=$consulta_select->fetchAll();
foreach($resultado as $fila){
    $array['contrasena']=$fila['contrasena'];
}

if ($array['contrasena']!=$contrasena_ant){
        header("location: ../cambio_contrasena.php?fallo=true");
    }elseif (($array['contrasena']===$contrasena_ant) && ($contrasena_nueva===$conf_contrasena_nueva)){
        $consulta_update=$conexion->prepare("UPDATE TBL_usuarios set contrasena='$contrasena_nueva' where usuario='$usuario'");
        $consulta_update->execute();
        header("location: ../cambio_contrasena.php?exito=true");
    }else{
        header("location: ../cambio_contrasena.php?exito=false");
    } 
?> 