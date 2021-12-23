    <?php if ($userInfo['type'] == 'Administrador') { ?>

        <div class="container mt-5">
            <h1> Control de Usuarios</h1>
            <p> Usted posee un nivel de usuario: <span class="badge bg-secondary"> <?= ucfirst($userInfo['type']); ?>
                </span></p>

            <hr>

<!-- insertar datatable  -->
<!-- insertar buscar -->
<!-- insertar paginacion -->
<!-- propiedad ascendente y descendente -->

            <h1 class="h4 text-gray-900 mb-4">Listado de Usuarios</h1>
            <hr><br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table  table-responsive">
                        <table class=" table table-dark table caption-top table-hover table-bordered">
                            <caption>Usuarios del sistema. Las Contraseñas no son visualizadas pero si podrá cambiarlas al Editar. </caption>
                            <thead class="table-primary">

                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Nivel</th>
                                    <th>Editar</th>
                                    <th>Desactivar</th>
                                </tr>
                            </thead>
                            <?php foreach ($datos as $key) : ?>

                                <tr>
                                    <td><?php echo $key->id_usuario; ?></td>
                                    <td><?php echo $key->usuario; ?></td>
                                    <td><?php echo $key->type; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . '/crud/obtenerNombre/' . $key->id_usuario ?>" class="btn btn-warning btn-sm ">Editar</a>
                                    </td>
                                    <td>
                                        <a href="http://" class="btn btn-danger btn-sm ">Desactivar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>




                    </div>

                </div>
            </div>


        </div>

    <?php } ?>

    <?php if ($userInfo['type'] == 'Estándar') { ?>
        <div class="container mt-5">

            <h1> Control de Usuarios</h1>
            <p> Usted posee un nivel de usuario: <span class="badge bg-secondary"> <?= ucfirst($userInfo['type']); ?>
                </span></p>
            <div class="container text-center">
                <div class="bg-dark p-2 text-danger">
                    <h3>¡DENEGADO!</h3>
                    <h6>
                        No tiene nivel de usuario requerido para este módulo. <br>
                        Favor comunicarse con un administrador del sistema.
                    </h6>
                </div>
                <i class="fas fa-ban fa-10x mt-5  "></i>
                <br>
                <br>
                <h2>
                    <i class="fas fa-user"></i> <?= ucfirst($userInfo['usuario']); ?>
                    <br>
                    <i class="fas fa-times-circle"></i> <?= ucfirst($userInfo['type']); ?>

                </h2>

                <a class="nav-link" href="<?= site_url('auth/logout'); ?>"><i class="fa fa-fw fa-sign-out-alt"></i> Salir</a>

            </div>
        <?php } ?>
        <div class="container mt-5">

        </div>


        <script type="text/javascript">
            let mensaje = '<?php echo $mensaje ?>'

            if (mensaje == '1') {
                alert('¡Agregado con Éxito!');
            } else if (mensaje == '0') {
                alert('¡Error al agregar!');
            } else if (mensaje == '2') {
                alert('¡Actualizado con Éxito!');
            } else if (mensaje == '3') {
                alert('¡Error al actualizar!');

            }
        </script>