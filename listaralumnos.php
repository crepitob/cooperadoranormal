<?php
include("conexion.php"); // Incluye la conexión

$sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Listado de Alumnos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Curso</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $fila["id"] ?></td>
            <td><?= $fila["nombre"] ?></td>
            <td><?= $fila["apellido"] ?></td>
            <td><?= $fila["curso"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
