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
       /*
           if($conexionBD)
           {
               echo("exito");
           }else{
               echo("error");
           }
       */
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
               $insertarProductos->execute();
               $resultado= $insertarProductos->execute();
   
               //Verifico el resultado
               if($resultado){
                   echo('Producto  agregado');
               }else{
                   echo('Error');
               }
   
   
           }
   
   
   }


?>