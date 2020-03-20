<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Sistema de Denuncias Seguridad Pública</title>
</head>

<body class="bg-light text-dark">
  <div class="container">
    <h1>Sistema de Quejas y Denuncias</h1>
    <h2>Dirección de Seguridad Pública Municipal</h2>

      <?php include_once ('controller/denunciasController.php'); ?>

    <footer>
      <!-- Footer Content -->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center col-md-12">
            Presidencia Municipal de Santa Cruz de Juventino Rosas, Guanajuato. <br>
            Dirección: Hidalgo 106, Zona Centro, Juventino Rosas, Gto. <br />
            Coordinación de Sistemas <a href="tel:+524121578040" class="telefono">(412) 157 80 40</a> Ext: 200 <br>
            Correo: sistemas@juventinorosas.gob.mx <br>
            <p class="footDR">© 2020 Todos los Derechos Reservados</p>
          </div>
        </div>
      </div>
      <!--fin Footer Content -->
    </footer>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
