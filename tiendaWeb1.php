<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaWEB</title>

    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
 
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Administrador de productos</h1>
    <p class="lead">Tienda virtual tecnologica.</p>
  </div>
</div>

<div  class="container-sm">
    <div>
        <form action="tiendaWeb1.php" method="POST" >
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nombre del Producto" name="nombreProducto">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Marca" name="marca">
            </div>
            <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Precio" name="precio">
            
            </div>
        </div>
        </div>
    
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Descripcion del producto:</b> </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
            </div>
        
            <input type="submit" class="btn btn-primary" name="btnregist" value="Registrar">
        </form>
             <?php 
                        if($_POST['nombreProducto'] == '' || $_POST['marca'] == ''|| $_POST['precio'] == '' )  {
                            echo('Digite todos los campos');
                        }elseif ($_POST['marca'] == '') {
                            echo ("Digite la marca");
                        }elseif ($_POST['precio'] == '') {
                            echo ("Digite el precio");
                        }
                  
                    ?>
     </div>
</div>




</body>
</html>

