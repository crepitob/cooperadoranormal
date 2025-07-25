<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conexion = new mysqli("localhost", "root", "2612sanTI76+", "cooperadoraenu");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"]; // importante: name en minúscula

    $sql = "INSERT INTO personas (nombre, apellido, telefono) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $apellido, $telefono);

    if ($stmt->execute()) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
} else {
    http_response_code(405);
    echo "Método no permitido";
}
?>
