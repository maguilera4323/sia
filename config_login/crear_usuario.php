<?php

include('conexion.php');

$usuario=strtoupper($_POST['usuario']);
$nombre=($_POST['nombre']);
$estado=($_POST['estado']);
$correo=($_POST['correo']);
$contrasena=($_POST['contrasena']);
$fec_creacion=($_POST['fec_creacion']);
$fec_vencimiento=($_POST['fec_vencimiento']);

$consulta=$conexion->prepare("INSERT INTO TBL_usuarios (id_usuario,usuario,nombre_usuario,estado_usuario,contrasena,correo_electronico,fecha_creacion,fecha_vencimiento)
values(null,?,?,?,?,?,?,?)");
$consulta->bindValue(1, $usuario);
$consulta->bindValue(2, $nombre);
$consulta->bindValue(3, $estado);
$consulta->bindValue(5, $correo);
$consulta->bindValue(4, $contrasena);
$consulta->bindValue(6, $fec_creacion);
$consulta->bindValue(7, $fec_vencimiento);
$consulta->execute();

header("location:../nuevo_usuario.php?exito=true");

?>