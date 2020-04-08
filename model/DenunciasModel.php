<?php

  class DenunciasModel{
    private $db; //Para almacenar la conexion a la BD
    private $denuncias; //almacenar los registros de la tabla denuncias

    public function __construct(){ //para darle estado inicial a la clase
      require_once ('model/Conectar.php');
      //almacenar en la variable de clase la conexion
      //que devuelve el metodo estico de la clase Conexion
      $this->db = Conectar::conexion();

      //Como las denuncias estan en una tabla no se puede almacenar en una variable normal
      //Se tiene que usar un array para almacenar un array entonces en la variable de clase
      //denuncias la declaramos array
      $this->denuncias = array();

    }

    public function getDenuncias(){
      //Consulta
      $sql = "SELECT * FROM denuncias";

      //Se prepara la consulta y devuelve un objeto sentencia
      //$consulta = $this->db->prepare($sql);
      $consulta = $this->db->query($sql);

      //Ejecutar la Consulta y puedes pasar varios marcadores a la consulta con el array asociativo
      //$consulta->execute();

      //obtener el resultado de la Consulta "un RecordSet"
      //Con el while checa todos los registros cada vuelta de ciclo
      //Va guardando en el array cada registro
      while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
        $this->denuncias[] = $filas;
      }

      //Cerrar el RecordSet
      //$consulta -> closeCursor();

      //devolver lo almacenado en el array Completo
      return $this->denuncias;

      //Cerrar la conexion a la BD
      //$this->db = null;
    }

  }


?>
