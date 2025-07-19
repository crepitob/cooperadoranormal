<?php
include("conexion.php");

$sql = "SELECT entradas.*, personas.nombre, personas.apellido
        FROM entradas
        JOIN personas ON entradas.id_persona = personas.id_persona
        ORDER BY fecha DESC";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Entradas de Dinero</title>
</head>
<body>
    <h2>Entradas Registradas</h2>
    <a href="registro_entrada.php">➕ Nueva Entrada</a><br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Persona</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $fila["fecha"] ?></td>
            <td>$<?= number_format($fila["monto"], 2) ?></td>
            <td><?= $fila["nombre"] . " " . $fila["apellido"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
