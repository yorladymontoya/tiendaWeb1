<?php

include("BaseDatos.php");


$idEliminar=($_GET["id"]);
$transaccion= new BaseDatos();

//3. crear la consulta SQL para eliminar

$consultaSQL="DELETE FROM productos WHERE idProducto='$idEliminar'";

//4. Utilizar el metodo para eliminar datos

$transaccion->eliminarProductos($consultaSQL);

header("Location:listarProductos.php");

?>