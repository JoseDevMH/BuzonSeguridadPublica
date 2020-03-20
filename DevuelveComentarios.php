<?php
  require_once('Conexion.php');
  class DevuelveComentarios extends Conexion{

      //Constructor de la clase
      public function __construct(){

        parent::__construct();

      }

      public function getComentarios(){
        //Consulta
        $sql = "SELECT * FROM $denuncias";

        //Se prepara la consulta y devuelve un objeto sentencia
        $sentencia = $this->conexion_db->prepare($sql);

        //Ejecutar la Consulta y puedes pasar varios marcadores a la consulta con el array asociativo
        $sentencia->execute();

        //obtener el resultado de la Consulta
        $rs = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        //Cerrar el RecordSet
        $sentencia -> closeCursor();

        //devolver lo almacenado en rs que es la tabla virtual o RecordSet
        return $rs;

        //Cerrar la conexion a la BD
        $this->conexion_db = null;
      }

  }

 ?>
