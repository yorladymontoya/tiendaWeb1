<?php

include("BaseDatos.php");

$idEditar=($_GET["id"]);

$transaccion=new BaseDatos();

if(isset($_POST["botonEditar"])){

    $id=$_GET["id"];
      
    $nombre=$_POST['nombreEditar'];
    $descripcion=$_POST['descripcionEditar'];
    $marca=$_POST['marcaEditar'];
    $precio=$_POST['precioEditar'];

$consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion' WHERE idProducto='$id'";

$transaccion->editarProductos($consultaSQL);

}
header("Location:listarProductos.php");

?>
