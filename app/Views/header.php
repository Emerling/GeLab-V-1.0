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

    <?php } ?>