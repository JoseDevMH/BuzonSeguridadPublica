<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fomulario Comentario</title>
</head>

<body>
  <div class="container main">
    <h3 class="textoBlanco">Buzón de Quejas y Sugerencias</h3>
    <div class="col-xs-12">
      <?php
        echo "Fecha: " . $hoy = date('d - m - Y');
        echo "<br />";
        //echo $_SERVER['REQUEST_TIME'];
      ?>
    </div>
    <form action="/controller/Transacciones.php" method="post" name="formulario1" enctype="multipart/form-data">
      <!--<div class="form-group">
        <label for="id">Id:</label>-->
      <input type="text" name="id" class="form-control" placeholder="Id Comentario" hidden />
      <!--</div>-->


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tipo">Tipo</label>
          <select class="custom-select" id="tipo" name="tipo" required>
            <option selected disabled value="">Choose...</option>
            <option value="QUE">Queja</option>
            <option value="DEN">Denuncia</option>
            <option value="PRE">Pregunta</option>
            <option value="SUG">Sugerencia</option>
            <option value="FEL">Felicitación</option>
          </select>
        </div>

        <div class="form-group col-md-6 ">

        </div>


      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tipo">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Nombre" maxlength="60" required />
        </div>

        <div class="form-group col-md-6">
          <label for="tipo">Telefono</label>
          <input type="text" name="telefono" class="form-control" placeholder="Telefono" maxlength="12" />
        </div>
      </div>

      <div class="form-group">
        <label for="tipo">Correo</label>
        <input type="email" name="correo" class="form-control" placeholder="Correo" maxlength="60" required />
      </div>

      <div class="form-group">
        <label for="tipo">Asunto</label>
        <input type="text" name="asunto" class="form-control" placeholder="Asunto" maxlength="45" required />
      </div>

      <div class="form-group">
        <textarea class="form-control" placeholder="Descripción de los eventos" name="descripcion" required></textarea>
      </div>

      <div class="form-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" placeholder="archivo...">
          <label class="custom-file-label" for="validatedCustomFile">Seleciona un archivo...</label>
        </div>
      </div>

      <input type="submit" class="btn btn-secondary" value="Enviar">
    </form>

  </div>

  </div>

</body>

</html>
