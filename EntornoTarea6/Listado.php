<?php include("Conexion.php"); ?>

<h2>Listado de Ciudades</h2>

<table border="1">
    <tr>
        <th>id</th><th>ciudad</th><th>país</th><th>habitantes</th><th>superficie</th><th>tieneMetro</th>
    </tr>
    <?php
    $resultado = $conexion->query("SELECT * FROM Ciudades");
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['ciudad']}</td>
                <td>{$fila['país']}</td>
                <td>{$fila['habitantes']}</td>
                <td>{$fila['superficie']}</td>
                <td>{$fila['tieneMetro']}</td>
              </tr>";
    }
    ?>
</table>
