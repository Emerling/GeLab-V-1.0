<!DOCTYPE html>
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
 -->
</head>

<body style="background-color:#F4F9F9;">
    <?php if ($userInfo['type'] == 'Administrador') { ?>
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
                                    <a class="dropdown-item" href="<?= site_url('/crud'); ?>"><i class="fa fa-fw fa-users"></i> Listar Usuarios</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= site_url('auth/register') ?>"><i class="fa fa-fw fa-user-plus"></i> Crear Usuarios</a>
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
                            <?= $userInfo['type']; ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

                                <i class="fas fa-user"></i> <?= ucfirst($userInfo['usuario']); ?>
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
        <div class="mdb-page-content text-center page-intro bg-light">
            <div class="card-group">
                <div class="card text-white bg-secondary mb-0">
                    <i class="fas fa-id-card fa-4x card-img-top mt-2  "></i>

                    <div class="card-body">
                        <h5 class="card-title">Agregar Paciente</h5>
                        <p class="card-text">
                            Agregar nuevos registros de pacientes rápidamente
                        </p>
                        <a href="#" class="btn btn-primary mb-">Aceptar</a>
                    </div>

                </div>
                <div class="card text-white bg-success mb-0">
                    <i class="fas fa-vial fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Exámenes de Laboratorio</h5>
                        <p class="card-text">
                            Cree nuevos registros de exámenes laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-info mb-0">
                    <i class="fas fa-clipboard-list fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Resultados de Laboratorio</h5>
                        <p class="card-text">
                            Buscar entre los registros de exámenes realizados.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-danger mb-0">
                    <i class="fas fa-calculator fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Presupuestos</h5>
                        <p class="card-text">
                            Realice presupuestos de laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>


            </div>
        </div>

        <!-- Background image -->
        <div class="p-0 text-center bg-image" style="background-image: url('img/pagina.jpg');height: 500px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" style="max-width:80%;" src="img/logo-lab.png" alt="Logo">
                    <!-- <div class="text-white">
                        <h1 class="mb-3">Heading</h1>
                        <h4 class="mb-3">Subheading</h4>
                        <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Background image -->


    <?php } ?>

    <?php if ($userInfo['type'] == 'Estándar') { ?>
        <nav class="navbar navbar-expand-lg navbar-light  mr-auto" style="background-color:#E7E6FC">
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

                        <!-- Dropdown configuración desactivada para usuario Estándar-->
                        <!-- <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-fw fa-cogs "></i> Configuración</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-users-cog"></i> Usuarios</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user-md"></i> Bionalistas</a>
                                </li>

                            </ul>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/logout'); ?>"><i class="fa fa-fw fa-sign-out-alt"></i> Salir</a>
                        </li>


                    </ul>
                    <ul class="navbar-nav ml-auto">


                        <!-- Dropdown -->
                        <li class="nav-item dropdown ">
                            <?= $userInfo['type']; ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

                                <i class="fas fa-user"></i> <?= ucfirst($userInfo['usuario']); ?>
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
        <div class="mdb-page-content text-center page-intro bg-light">
            <div class="card-group">
                <div class="card text-white bg-secondary mb-0">
                    <i class="fas fa-id-card fa-4x card-img-top mt-2 "></i>

                    <div class="card-body">
                        <h5 class="card-title">Agregar Paciente</h5>
                        <p class="card-text">
                            Agregar nuevos registros de pacientes rápidamente
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-success mb-0">
                    <i class="fas fa-vial fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Exámenes de Laboratorio</h5>
                        <p class="card-text">
                            Cree nuevos registros de exámenes laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-info mb-0">
                    <i class="fas fa-clipboard-list fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Resultados de Laboratorio</h5>
                        <p class="card-text">
                            Buscar entre los registros de exámenes realizados.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-danger mb-0">
                    <i class="fas fa-calculator fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Presupuestos</h5>
                        <p class="card-text">
                            Realice presupuestos de laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Background image -->
        <div class="p-0 text-center bg-image" style="background-image: url('img/pagina2.jpg');height: 500px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" style="max-width:80%;" src="img/logo-lab.png" alt="Logo">

                </div>
            </div>
        </div>

        <!-- Background image -->

    <?php } ?>
    <?php if ($userInfo['type'] == 'Básico') { ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mr-auto">
            <div class=" container-fluid">
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
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-users-plus"></i> Crear Usuario</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-users-cog"></i> Usuarios</a>
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
                            <?= $userInfo['type']; ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

                                <i class="fas fa-user"></i> <?= ucfirst($userInfo['usuario']); ?>
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
        <div class="mdb-page-content text-center page-intro bg-light">
            <div class="card-group">
                <div class="card text-white bg-secondary mb-0">
                    <i class="fas fa-id-card fa-4x card-img-top mt-2 "></i>

                    <div class="card-body">
                        <h5 class="card-title">Agregar Paciente</h5>
                        <p class="card-text">
                            Agregar nuevos registros de pacientes rápidamente
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-success mb-0">
                    <i class="fas fa-vial fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Exámenes de Laboratorio</h5>
                        <p class="card-text">
                            Cree nuevos registros de exámenes laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-info mb-0">
                    <i class="fas fa-clipboard-list fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Resultados de Laboratorio</h5>
                        <p class="card-text">
                            Buscar entre los registros de exámenes realizados.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>

                </div>
                <div class="card text-white bg-danger mb-0">
                    <i class="fas fa-calculator fa-4x card-img-top mt-2 "></i>
                    <div class="card-body">
                        <h5 class="card-title">Presupuestos</h5>
                        <p class="card-text">
                            Realice presupuestos de laboratorio.
                        </p>
                        <a href="#" class="btn btn-primary">Aceptar</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Background image -->
        <div class="p-0 text-center bg-image" style="background-image: url('img/pagina2.jpg');height: 500px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img class="img-fluid" style="max-width:80%;" src="img/logo-lab.png" alt="Logo">

                </div>
            </div>
        </div>

        <!-- Background image -->
    <?php } ?>

    <!-- PRISM -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/new-prism.js'); ?>"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdbsnippet.min.js'); ?>"></script>
    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/mdb.min.js'); ?>"></script>

    <!-- Custom scripts -->

</body>

</html>