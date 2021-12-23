<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso al sistema</title>

    <link href="<?= base_url('bootstrap/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <!-- <img class="img-responsive" src="<?= base_url('img/login-1.png') ?>" alt="Logo"> -->
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ingresar</h1>
                                    </div>
                                    <form action="<?= base_url('auth/check') ?>" method="POST" autocomplete="off">
                                        <?= csrf_field(); ?>
                                        <h5>

                                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                                <div class="alert text-danger" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                                            <?php endif ?>
                                            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                                <div class="alert text-success" role="alert"><?= session()->getFlashdata('success'); ?></div>
                                            <?php endif ?>

                                        </h5>
                                        <div class="form group">
                                            <label for="">Nombre</label>
                                            <input type="text" class="form-control" name="usuario" placeholder="Escriba su nombre" value="<?= set_value('usuario'); ?>">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'usuario') : '' ?> </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="password" class="form-control" name="password" placeholder="Escriba su contraseña">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?> </span>

                                        </div> <br>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                                        </div>
                                        <br>
                                        <a href="<?= site_url('auth/register') ?>">Registrar usuario</a>
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- 

        <script src="<?= base_url('bootstrap/js/jquery.min.js') ?>"></script>


        <script src="<?= base_url('bootstrap/js/sb-admin-2.min.js') ?>"></script> -->


</body>

</html>