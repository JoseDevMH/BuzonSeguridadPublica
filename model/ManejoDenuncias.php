<?php
  include_once ('ObjetoDenuncia.php');
  class ManejoDenuncias{
    private $db; //Para almacenar la conexion a la BD
    public function __construct(){ //para darle estado inicial a la clase
      require_once ('model/Conectar.php');
      //almacenar en la variable de clase la conexion
      //que devuelve el metodo estico de la clase Conexion
      $this->db = Conectar::conexion();

      //Como las denuncias estan en una tabla no se puede almacenar en una variable normal
      //Se tiene que usar un array para almacenar un array entonces en la variable de clase
      //denuncias la declaramos array
      //$this->$denuncias = array();
      //$this->denuncias;
    }

    
  }

?>
