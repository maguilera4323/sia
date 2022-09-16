<?php

$server = "localhost";
$usuario = "root";
$contrasena = "";
$db="crud_usuarios";

$conexion = mysqli_connect($server, $usuario, $contrasena, $db);

if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}
echo "Conectado a la BD MySQL";

/* class ConnectionMySQL{
    private $host;
    private $user;
    private $password;
    private $database;
    private $conexion;
     
    public function __construct(){ 
    require_once "config_parametros_db.php";
    $this->host=HOST;
    $this->user=USER;
    $this->password=PASSWORD;
    $this->database=DATABASE;
    }

    public function CreateConnection(){
        $conexion = new mysqli($this->host, $this->user, $this->password, $this->database);
         if($conexion->connect_errno) {
          echo 'Error de conexion';
         }
        }
              
    
    public function CloseConnection(){
         $conexion->close();
        }
} */

?> 