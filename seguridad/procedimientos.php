<?php
require_once('conex.php');

$mysql = new connection();
$conexion = $mysql-> get_connection();

$datos = array("n_nom_usu" => "alberto", "n_correo" => "alber@gmail.com", "n_clave"=> sha1("roberto45"), "n_nombre" =>  "huhuh", "n_apellido"=> "tome");
$statement =$conexion->prepare ("call insert_usu(?,?,?,?,?)");
$statement->bind_param("sssss", $datos["nom_usu"], $datos["correo"], $datos["clave"], $datos["nombre"], $datos["apellido"]);
$statement-> execute();
$statement->close();
$conexion-> close();

?>