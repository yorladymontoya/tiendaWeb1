<?php

include("BaseDatos.php");

// 1. Recibo el id que voy a eliminar por la URL(GET)

$idEliminar=($_GET["id"]);

// 2. Crear el objeto de la clase Base Datos

$transaccion= new BaseDatos();

//3. crear la consulta SQL para eliminar

$consultaSQL="DELETE FROM productos WHERE idProducto='$idEliminar'";

//4. Utilizar el metodo para eliminar datos

$transaccion->eliminarProductos($consultaSQL);



?>