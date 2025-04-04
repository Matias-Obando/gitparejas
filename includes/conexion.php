<?php
$servername = "localhost"; 
$username = "webserver"; 
$password = "123456"; 
$dbname = "testimoniales"; 

$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conexion) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());

}
?>
