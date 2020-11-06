<?php
   class BaseDatos
   {
       //atributos
       public $usuarioBD="root";
       public $passwordBD="";
   
       //constructor
       public function __construct(){}
   
       //metodos
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
               //Estableccer una conexion
               $conexionBD= $this->conectarBD();
   
               //Preparar la consulta
               $insertarProductos=$conexionBD->prepare($consultarSQL);
   
               //Ejecutar la consulta
                $resultado= $insertarProductos->execute();
   
               //Verifico el resultado
               if($resultado){
                   echo('Producto  agregado');
               }else{
                   echo('Error');
               }
           }
           public function consultarProductos($consultarSQL)
        {
            //Estableccer una conexion
            $conexionBD= $this->conectarBD();

             //Preparar la consulta
             $consultarProductos=$conexionBD->prepare($consultarSQL);

            //Establecer el metodo de consulta
            $consultarProductos->setFetchMode(PDO::FETCH_ASSOC);

            //Ejecutar la operacion en la BD
            $consultarProductos->execute();
            return( $consultarProductos->fetchAll());

        }
        public function eliminarProductos($consultarSQL)
        {
            //Estableccer una conexion
            $conexionBD= $this->conectarBD();

            //Preparar la consulta
            $eliminarProductos=$conexionBD->prepare($consultarSQL);

            //Ejecutar la consulta
            $resultado=$eliminarProductos->execute();

            //verificar el resultado

        if ($resultado){
            echo("El producto ha sido eliminado");
        }
        else{
            echo("Error al eliminar el producto");
        }  

        }
   
   
   }


?>