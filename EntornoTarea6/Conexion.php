<?php
$conexion = new mysqli("localhost", "root", "", "Capitales");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
