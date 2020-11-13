<?php

include("BaseDatos.php");


$idEliminar=($_GET["id"]);
$transaccion= new BaseDatos();

$consultaSQL="DELETE FROM productos WHERE idProducto='$idEliminar'";

$transaccion->eliminarProductos($consultaSQL);

header("Location:listarProductos.php");

?>
