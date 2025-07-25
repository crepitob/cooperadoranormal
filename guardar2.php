<?php
$conexion = new mysqli("localhost", "root", "2612sanTI76+", "cooperadoraenu");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO personas (nombre,apellido, telefono ) VALUES ('$nombre', '$apellido', '$telefono')";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $nombre, $apellido, $telefono);

if ($stmt->execute()) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar.";
}

$stmt->close();
$conexion->close();
?>
