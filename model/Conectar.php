<?php
//include_once('config.php');

  class Conectar {

    public static function conexion (){
      try {

        $conexion_db = new PDO('mysql:host=localhost; dbname=denuncias', 'root', '');
        $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion_db->exec("SET CHARACTER SET utf8");
        //return conexion_db;

      } catch (\Exception $e) {

        die('Error: ' . $e->GetMessage());
        echo "<br> La linea de error es: " . $e->getLine();

      }

      return $conexion_db;
    }

  }

 ?>
