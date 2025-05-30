<?php
$conexion = new mysqli("localhost", "root", "", "Capitales");
$conexion->set_charset("utf8");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
