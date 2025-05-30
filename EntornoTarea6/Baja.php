<?php include("Conexion.php"); ?>
<form method="post">
    ID de ciudad a eliminar: <input type="number" name="id">
    <input type="submit" value="Eliminar">
</form>

<?php
if ($_POST) {
    $conexion->query("DELETE FROM Ciudades WHERE id=$_POST[id]");
    echo "Ciudad eliminada.";
}
?>
