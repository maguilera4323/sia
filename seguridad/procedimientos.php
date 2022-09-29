<?php
require_once('conex.php');

$mysql = new connection();
$conexion = $mysql-> get_connection();

$datos = array("nom_usu" => "pedro", "correo" => "pep@gmail.com", "clave"=> sha1("roberto45"), "nombre" =>  "huhuh", "apellido"=> "flores");
$statement =$conexion->prepare ("call insert_usu(?,?,?,?,?)");
$statement->bind_param("sssss", $datos["nom_usu"], $datos["correo"], $datos["clave"], $datos["nombre"], $datos["apellido"]);
$statement-> execute();
$statement->close();
$conexion-> close();

?>