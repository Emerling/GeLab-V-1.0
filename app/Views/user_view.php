<!-- *************************************************************** -->
<?php if ($userInfo['type'] == 'Administrador') { ?>
   <!-- *************************************************************** -->

   <div class="text-center p-1" style="background-color:#99173C;color:whitesmoke;">
      <h2 class="fa fa-fw fa-users mt-3"></h2>
      <h4>Usuarios</h4>
   </div>


   <div class="container mt-4">
      <div class="row">
         <div class="col-sm-12">


            <div class="d-flex justify-content-end">
               <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">Agregar Usuario</a>
            </div>
            <?php
            if (isset($_SESSION['msg'])) {
               echo $_SESSION['msg'];
            }
            ?>
             <div class="table  table-responsive-md">

               <!-- <table class="table table-bordered table-responsive" > -->
               <table class=" table table-dark table caption-top table-hover table-bordered autoWidth	" id="users-list">

                  <thead class="table-primary">
                     <tr>
                        <th>Id Usuario</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acción</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if ($users) : ?>
                        <?php foreach ($users as $user) : ?>
                           <tr>
                              <td><?php echo $user['id']; ?></td>
                              <td><?php echo $user['name']; ?></td>
                              <td><?php echo $user['email']; ?></td>
                              <td>
                                 <a href="<?php echo base_url('edit-view/' . $user['id']); ?>" class="btn btn-primary btn-sm">Editar</a>
                                 <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <br><br>
<?php } else { ?>
   <div class="text-center p-1 mt-5" style="background-color: rgba(255, 9, 0,0.3);">
      <h1> ¡Su nivel de usuario no está autorizado!</h1>
      <h5 class="text-secondary"> Comuníquese con el Administrador del sistema </h5>
   </div>

<?php } ?>

   <!-- Custom scripts -->
   <script type="text/javascript" src="<?= base_url('jquery/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('jquery/jquery.dataTables.min.js'); ?>"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>