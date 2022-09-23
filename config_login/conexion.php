<?php

$server = "20.25.134.34";
$usuario = "admin_bd";
$contrasena = "admin1234";
$db="proyecto_cafeteria";

try {
  $conexion = new PDO("mysql:host=$server;dbname=$db", $usuario, $contrasena);      
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado a la BD MySQL";
}

catch(PDOException $e)
{
echo "Error de conexión: " . $e->getMessage();
}

?> 