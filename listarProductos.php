<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS APPLE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

<?php

include("BaseDatos.php");

$transaccion=new BaseDatos();

$consultaSLQ="SELECT * FROM productos WHERE 1 ";

$productos=$transaccion->consultarProductos($consultaSLQ);

?>

<main>
  
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://github.com/yorladymontoya/imagenesTiendaWeb1/blob/main/baner1.jpg?raw=true" class="d-block w-100" height="350">
                    </div>
                    <div class="carousel-item">
                    <img src="https://github.com/yorladymontoya/imagenesTiendaWeb1/blob/main/baner2.jpg?raw=true" class="d-block w-100" height="350">
                    </div>
                    <div class="carousel-item">
                    <img src="https://github.com/yorladymontoya/imagenesTiendaWeb1/blob/main/baner3.jpg?raw=true" class="d-block w-100" height="350">
                    </div>
                </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../tiendaWeb1/formulario.php">Administrador de Productos</a>
    </nav>

 
<div class="container" style="background-color: silver;" >
    <div class="row row-cols-1 row-cols-md-4">
        <?php foreach($productos as $producto): ?>

            <div class="col mb-4">
                    <div class="card h-100 border-info bg-light ">
                        <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="FOTO" height="200" >
                            <div class="card-body">
                            <h3 class="card-title"><?php echo($producto["nombre"]) ?></h3>
                            <h5 class="card-title"><?php echo($producto["marca"]) ?></h5>
                            <h3 class="card-title"><?php echo($producto["precio"]) ?></h3>
                        <p class="card-text"><?php echo($producto["descripcion"])?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                   Editar
                                </button>
                        <a href="eliminarproductos.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-secondary">Eliminar</a>
                      
                    </div>
                </div>
                        <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="editarProductos.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                                    <div class="form-group">
                                                        <label>Nombre:</label>
                                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Marca:</label>
                                                        <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Precio:</label>
                                                        <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Descripcion:</label>
                                                            <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-warning" name="botonEditar">Editar</button>
                                                </form>
                                            </div>
                                        </div>
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