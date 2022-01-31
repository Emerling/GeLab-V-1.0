<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 CRUD - Edit seccion Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form method="post" id="update_seccion" name="update_seccion" 
    action="<?= site_url('/seccion-update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $seccion_obj['id']; ?>">

      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $seccion_obj['nombre']; ?>">
      </div>

      <div class="form-group">
        <label>Código</label>
        <input type="text" name="codigo" class="form-control" value="<?php echo $seccion_obj['codigo']; ?>">
      </div>

      <div class="form-group">
        <label>Control</label>
        <input type="control" name="control" class="form-control" value="<?php echo $seccion_obj['control']; ?>">
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Guardar Datos</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_seccion").length > 0) {
      $("#update_seccion").validate({
        rules: {
          nombre: {
            required: true,
          },
          codigo: {
            required: true,
           
          },
          control: {
            required: true,
          
          },
        },
        messages: {
          nombre: {
            required: "Name is required.",
          },
          codigo: {
            required: "codigo is required.",
          
          },
          control: {
            required: "control is required.",
          
          },
        },
      })
    }
  </script>
</body>

</html>