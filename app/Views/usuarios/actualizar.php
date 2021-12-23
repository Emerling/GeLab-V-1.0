<?php
$id_usuario = $datos[0]['id_usuario'];
$usuario = $datos[0]['usuario'];
$type = $datos[0]['type'];
$password = $datos[0]['password'];

?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Actualizar Usuarios, world!</title>
</head>

<body>
  <div class="container">
    <h1>Control de Usuarios!</h1>
    <!-- <?php print_r($datos); ?> -->
    <div class="row">
      <div class="col-sm-12">
        <form action="<?php echo site_url() . 'crud/actualizar' ?>" method="post">

          <input type="text" name="id_usuario" id="id_usuario" hidden="" 
          value="<?php echo $id_usuario ?>">

          <label for="usuario">Nombre</label>
          <input type="text" name="usuario" id="usuario" class="form-control" 
          value="<?php echo $usuario ?>">

          <label for="type">Nivel del Usuario</label>
          <input type="text" name="type" id="type" class="form-control" 
          value="<?php echo $type ?>">

          <label for="password">Contraseña</label>
          <input type="text" name="password" id="password" class="form-control" 
          value="<?php echo $password ?>">

          <label for="cpassword">Confirme contraseña</label>
          <input type="text" name="cpassword" id="cpassword" class="form-control">
          <br>
          <button class="btn btn-primary btn-sm">Actualizar </button>

        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>