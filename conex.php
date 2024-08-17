<?php 
$server = "localhost";
$usuario = "root";
$clave = "";
$base = "login";

$conex = new mysqli($server, $usuario, $clave, $base);

// Check connection
if ($conex->connect_error) {
    die("Connection fallida: " . $conex->connect_error);
} else {
    // Configurar la conexión para usar UTF-8
    $conex->set_charset("utf8mb4");
     //echo "coreecto"; // Comentado para evitar salida directa
} 
?>
