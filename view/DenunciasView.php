<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <div class="container">
    <?php //include_once ('controller/denunciasController.php'); ?>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Tipo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Asunto</th>
          <th scope="col">Descripción</th>
          <th scope="col">Estatus</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php //var_dump ($matrizDenuncias); ?>
      <?php  foreach ($matrizDenuncias as $registro): ?>
        <tr scope="row">
          <td><?php echo $registro['id']; ?></td>
          <td><?php echo $registro['tipo']; ?></td>
          <td><?php echo $registro['nombre']; ?></td>
          <td><?php echo $registro['correo']; ?></td>
          <td><?php echo $registro['asunto']; ?></td>
          <td><?php echo $registro['descripcion']; ?></td>
          <td><?php echo $registro['estatus']; ?></td>
          <td><input type="submit" id="verMas" class="btn btn-secondary btn-sm" value="Ver más"></td>
        </tr>
      <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</body>

</html>
