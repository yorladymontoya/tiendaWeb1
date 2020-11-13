<?php
   class BaseDatos
   {
   
       public $usuarioBD="root";
       public $passwordBD="";
   
       public function __construct(){}
   
       public function conectarBD()
       {
   
           try {
               $datosBD="mysql:host=localhost;dbname=bd_tiendaweb1";
               $conexionBD= new PDO($datosBD, $this -> usuarioBD, $this -> passwordBD);
              
               return($conexionBD);
   
           } catch (PDOException $error) {
               echo($error -> getMessage());
           }
   
       }
           public function agregarProductos($consultarSQL)
           {
        
               $conexionBD= $this->conectarBD();
               $insertarProductos=$conexionBD->prepare($consultarSQL);
                $resultado= $insertarProductos->execute();
               if($resultado){
                   echo('Producto  agregado con exito');
               }else{
                   echo('Error al agregar el producto');
               }
           }
           public function consultarProductos($consultarSQL)
        {
            $conexionBD= $this->conectarBD();
            $consultarProductos=$conexionBD->prepare($consultarSQL);

            $consultarProductos->setFetchMode(PDO::FETCH_ASSOC);
            $consultarProductos->execute();
            return( $consultarProductos->fetchAll());

        }
        public function eliminarProductos($consultarSQL)
        {
           
            $conexionBD= $this->conectarBD();
            $eliminarProductos=$conexionBD->prepare($consultarSQL);
            $resultado=$eliminarProductos->execute();

        if ($resultado){
            echo("El producto ha sido eliminado");
        }
        else{
            echo("Error al eliminar el producto");
        }  

        }
        public function editarProductos($consultarSQL){
            $conexionBD= $this->conectarBD();
            $editarProductos=$conexionBD->prepare($consultarSQL);
            $resultado=$editarProductos->execute();

            if ($resultado){
                echo("El producto ha sido editado con exito");
            }
            else{
                echo("Error al editar el producto");
            }  
        }
   }


?>