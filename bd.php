<?php
   session_start();

    $servidor = "localhost";
    $basedatos = "proyectoLibros";
    $usuario = "postgres";
    $password = "123";

   try{
      $conexion = pg_connect("host=$servidor dbname=$basedatos user=$usuario password=$password");
   }catch(Exception $ex){
      echo $ex->getMessage();
   }

    
?>