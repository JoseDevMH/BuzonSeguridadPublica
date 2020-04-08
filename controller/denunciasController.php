<?php

  require_once ('model/DenunciasModel.php');

//Instanciar $denuncia para llamar el construtor de la clase DenunciasModel
  $denuncia = new DenunciasModel();

//Almacenar en un array o matriz lo que obtenemos con el metodo getDenuncias
  $matrizDenuncias = $denuncia->getDenuncias();

  require_once ('view/DenunciasView.php');

  //require_once ('../view/formDenunciasView.php');

 ?>
