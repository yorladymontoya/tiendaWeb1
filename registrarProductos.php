<?php 
/*

*/

include('BaseDatos.php');

if (isset($_POST['btnregist'])) {

    if($_POST['Producto'] == '' )  {
        echo('Digite todos los campos');
 }elseif ($_POST['marca'] == '') {
        echo ("Digite la marca");
 }elseif ($_POST['precio'] == '') {
        echo ("Digite el precio");
 }
   
$producto=$_POST['Producto'];
$marca=$_POST['marca'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];


$transaccion= new BaseDatos();
$transaccion->conectarBD();
$consultarSQL="INSERT INTO productos(nombre,marca,precio,descripcion) VALUES ('$producto', '$marca', '$precio', '$descripcion')";
$transaccion-> agregarProductos($consultarSQL);

}

                  
 ?>