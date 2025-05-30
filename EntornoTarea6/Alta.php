<?php include("Conexion.php"); ?>
<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro (1 o 0): <input type="number" name="tieneMetro" min="0" max="1"><br>
    <input type="submit" value="Agregar">
</form>

<?php
if ($_POST) {
    $sql = "INSERT INTO Ciudades (ciudad, país, habitantes, superficie, tieneMetro)
            VALUES ('$_POST[ciudad]', '$_POST[pais]', $_POST[habitantes], $_POST[superficie], $_POST[tieneMetro])";
    $conexion->query($sql);
    echo "Ciudad agregada.";
}
?>

<div style="text-align:center; margin-top:20px;">
    <a href="Index.html" style="
        text-decoration:none;
        padding:10px 20px;
        background-color:#007BFF;
        color:white;
        border-radius:5px;
        font-family:sans-serif;
    ">Volver al Menú Principal</a>
</div>
