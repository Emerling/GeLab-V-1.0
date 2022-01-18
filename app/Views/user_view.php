<!doctype html>
<html lang="es">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sistema</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.css'); ?>" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="<?= base_url('fonts/font.css'); ?>" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/mdb.min.css'); ?>" />
    <!-- PRISM -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/new-prism.css'); ?>" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('jquery/jquery.dataTables.min.css'); ?>" />
</head>
<body style="background-color:#F4F9F9;">



<!-- *************************************************************** -->
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Agregar Usuario</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3 mb-5">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Id Usuario</th>
             <th>Nombre</th>
             <th>Email</th>
             <th>Acción</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Eliminar</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>

  </div>
</div>
 <br><br><br><br>
<script type="text/javascript" src="<?= base_url('jquery/jquery.js'); ?>"></script>
<link rel="stylesheet" href="<?= base_url('jquery/jquery.dataTables.min.css'); ?>" />
<script type="text/javascript" src="<?= base_url('jquery/jquery.dataTables.min.js'); ?>"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>



</body>
</html>