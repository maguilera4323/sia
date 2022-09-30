<?php

include('conexion.php');
session_start();

    $usuario=strtoupper($_POST['usuario']);
    $clave=$_POST['clave'];
    $array=array();

    $consulta=$conexion->prepare("SELECT count(*) as registro_encontrado, usuario, estado_usuario FROM TBL_usuarios WHERE usuario='$usuario' and contrasena='$clave'
    GROUP BY usuario, estado_usuario LIMIT 1");
    $consulta->execute();
    $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $fila){
        $array['registro_encontrado']=$fila['registro_encontrado'];
        $array['usuario']=$fila['usuario'];
        $array['estado_usuario']=$fila['estado_usuario'];
    }

        if ($array['registro_encontrado']>0){
                iniciarSesion($array);
            }else{
                datosIncorrectos();
            }



    function iniciarSesion($array){
        include('conexion.php');

        switch ($array['estado_usuario']){
            case 'Activo':
            session_start();
                $_SESSION['usuario_login']=$array['usuario'];
                header("location: ../home.php");
            break;
            case 'Inactivo':
                header("location:../login.php?inactivo=true");
            break;
            case 'Bloqueado':
                header("location: ../login.php?bloqueado=true");
            break;
        }
    }

    function datosIncorrectos(){
        include('conexion.php');

        $ingresos_fallidos=$_POST['contador'];
        $usuario_inc=strtoupper($_POST['usuario']);

        if ($ingresos_fallidos>=2){
            $consulta_update=$conexion->prepare("UPDATE TBL_usuarios set estado_usuario=3 where usuario='$usuario_inc'");
            $consulta_update->execute();
            header("location: ../login.php?bloqueado=true");
            $ingresos_fallidos=0;
        }else{
            header("location:../login.php?fallo=true");
        } 
    }

?>