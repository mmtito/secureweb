<?php
$conexion = new mysqli("localhost", "root", "123456789", "secureweb");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
