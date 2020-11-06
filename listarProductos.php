<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>

<?php

include("BaseDatos.php");

//1.transaccion=new BaseDatos();
$transaccion=new BaseDatos();
//2. Definir la consulta para buscar datos

$consultaSLQ="SELECT * FROM productos WHERE 1 ";

//3. Ejecutar el metodo consultarDatos()
// y almacenar la respuesta en una variable

$productos=$transaccion->consultarProductos($consultaSLQ);

?>

<main>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($productos as $producto): ?>

            <div class="col mb-4">
                    <div class="card h-100">
                        <img src="../htdocs/tiendaWeb1/img/tienda-interna.jpg" class="card-img-top">
                            <div class="card-body">
                            <h3 class="card-title"><?php echo($producto["nombre"]) ?></h3>
                            <h5 class="card-title"><?php echo($producto["marca"]) ?></h5>
                            <h3 class="card-title"><?php echo($producto["precio"]) ?></h3>
                        <p class="card-text"><?php echo($producto["descripcion"])?></p>
                        <p class="card-text"><?php echo($producto["url"])?></p>
                        <a href="eliminarproductos.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>


        <?php endforeach?>


</div>



</main>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    
</body>
</html>