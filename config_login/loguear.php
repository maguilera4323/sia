<?php

include('conexion.php');

$usuario=strtoupper($_POST['usuario']);
$clave=$_POST['clave'];
$array=array();

$consulta=$conexion->prepare("SELECT count(*) as contar, usuario, estado_usuario FROM TBL_usuarios WHERE usuario='$usuario' and contrasena='$clave'
GROUP BY usuario, estado_usuario LIMIT 1");
$consulta->execute();
$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
foreach($resultado as $fila){
    $array['contar']=$fila['contar'];
    $array['usuario']=$fila['usuario'];
    $array['estado_usuario']=$fila['estado_usuario'];
}

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