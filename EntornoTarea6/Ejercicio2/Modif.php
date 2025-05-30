<?php include("Conexion.php"); ?>
<form method="post">
    ID: <input type="number" name="id"><br>
    Nueva ciudad: <input type="text" name="ciudad"><br>
    Nuevo pais: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro (1 o 0): <input type="number" name="tieneMetro" min="0" max="1"><br>
    <input type="submit" value="Modificar">
</form>

<?php
if ($_POST) {
    $sql = "UPDATE Ciudades SET 
            ciudad='$_POST[ciudad]', pais='$_POST[pais]', 
            habitantes=$_POST[habitantes], superficie=$_POST[superficie],
            tieneMetro=$_POST[tieneMetro] WHERE id=$_POST[id]";
    $conexion->query($sql);
    echo "Ciudad modificada.";
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
    ">Volver al Menu Principal</a>
</div>