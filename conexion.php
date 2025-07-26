<?php
$conexion = new mysqli("localhost", "root", "2612sanTI76+", "cooperadoraenu");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
