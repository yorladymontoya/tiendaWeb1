<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Productos Apple</title>

    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../tiendaWeb1/listarProductos.php">Lista de Productos</a>
</nav>
 
<div class="jumbotron jumbotron-fluid" img src="../htdocs/tiendaWeb1/tienda-interna.jpg" >

  <div class="container">
    <h1 class="display-4">Administrador de productos</h1>
    <p class="lead">Tienda virtual tecnologica.</p>
  </div>
 
</div>

<div  class="container-sm">
    <div>
        <form action="registrarProductos.php" method="POST" >
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nombre del Producto" name="Producto">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Marca" name="marca">
            </div>
            <div class="row">
        <div class="col">
            <input type="number" class="form-control" placeholder="Precio" name="precio">
            
            </div>
        </div>
        </div>
    
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Descripcion del producto:</b> </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Foto:</b> </label>
                <input type="text" class="form-control" placeholder="Url//.. foto producto" name="foto">
            </div>
        
            <input type="submit" class="btn btn-primary" name="btnregist" value="Registrar">
        </form>
            
     </div>
</div>




</body>
</html>

