<?php include("Conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Ciudades</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ccc;
        }
        .menu-button {
            display: block;
            margin: 20px auto;
            text-align: center;
        }
        .menu-button a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }
        .menu-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Listado de Ciudades</h2>

<?php
$resultado = $conexion->query("SELECT * FROM Ciudades");

if ($resultado->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Habitantes</th>
                <th>Superficie</th>
                <th>Tiene Metro</th>
            </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['ciudad']}</td>
                <td>{$fila['país']}</td>
                <td>{$fila['habitantes']}</td>
                <td>{$fila['superficie']}</td>
                <td>" . ($fila['tieneMetro'] ? 'Sí' : 'No') . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No hay ciudades registradas.</p>";
}
?>

<div class="menu-button">
    <a href="Index.html">Volver al Menú Principal</a>
</div>

</body>
</html>
