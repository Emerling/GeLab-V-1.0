<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.css'); ?>" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="<?= base_url('fonts/font.css'); ?>" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/mdb.min.css'); ?>" />
    <!-- PRISM -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/new-prism.css'); ?>" />
    <!-- Custom styles    php print_r($datos); -->
    
    
    <title>Lista de Usuarios</title>
</head>

<body style="background-color:#F4F9F9;">
    
    <!-- navegacion  -->
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark mr-auto">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GetLab <sup> V-1.0</sup></a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard">Inicio</a>
                    </li>
                    <!-- Dropdown pacientes-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-hospital-user"></i> Pacientes</a>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-users"></i> Listar</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user-plus"></i> Ingresar</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user-edit"></i> Editar/Eliminar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-vial"></i> Exámenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-calculator"></i> Presupuestos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> Resultados</a>
                    </li>

                    <!-- Dropdown configuración-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-cogs"></i> Configuración</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>

                                <a class="dropdown-item" href="<?= site_url('/crud'); ?>"><i class="fa fa-fw fa-user-cog"></i> Usuarios</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user-md"></i> Bionalistas</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/logout'); ?>"><i class="fa fa-fw fa-sign-out-alt"></i> Salir</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <!-- Dropdown -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#"><i class="fas fa-id-badge"></i> Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= site_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Salir</a>

                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>

            </nav>
    <!-- fin navegacion  -->
    <div class="container">
        <h1> Control  de Usuarios</h1>
        <hr>
    <h1 class="h4 text-gray-900 mb-4">Crear Usuario</h1>

        <div class="row">
            <div class="col-sm-12">
            <form action="<?= base_url('auth/save'); ?>" method="POST" autocomplete="off">

                <form method="post" action="<?php echo site_url() . 'crud/crear' ?>">
                    <label for="usuario">Nombre</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                    <label for="type">Nivel del Usuario</label>
                    <input type="text" name="type" id="type" class="form-control">
                    <label for="password">Contraseña</label>
                    <input type="text" name="password" id="password" class="form-control">
                    <label for="cpassword">Confirme contraseña</label>
                    <input type="text" name="cpassword" id="cpassword" class="form-control">
                    <br>
                    <button class="btn btn-primary btn-sm">Agregar </button>
                </form>
            </div>
        </div>


        <hr>
        <h2>Listado de Usuarios</h2>
        <hr><br>


        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Nivel</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach ($datos as $key) : ?>

                            <tr>
                                <td><?php echo $key->id_usuario; ?></td>
                                <td><?php echo $key->usuario; ?></td>
                                <td><?php echo $key->type; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . '/crud/obtenerNombre/' . $key->id_usuario ?>" class="btn btn-warning btn-sm ">Editar</a>
                                </td>
                                <td>
                                    <a href="http://" class="btn btn-danger btn-sm ">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>




                </div>

            </div>
        </div>


    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- PRISM -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/new-prism.js'); ?>"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdbsnippet.min.js'); ?>"></script>
    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdb.min.js'); ?>"></script>

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
</body>

</html>