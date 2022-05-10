<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/estilos.css" />
  <title>Subir Imagen</title>
</head>

<body><br>

  <div class="container"><hr>
    <form name="MiForm" id="MiForm" class="formulario" method="post" action="cargar.php" enctype="multipart/form-data">
      <h4 class="text-center">Seleccione imagen</h4>
      <div class="form-group">
        <div class="col-sm-8">
          <input type="file" class="form-control" id="imagen" name="imagen" multiple>
        </div><br>
        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
      </div>
    </form>
    <br><br>
  </div>

  <!--Jquery, popper, bootstrap-->

  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>