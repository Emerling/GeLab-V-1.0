<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="<?= base_url('bootstrap/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Crear Usuario</h1>
                            </div>
                            <form action="<?= base_url('auth/save'); ?>" method="POST" autocomplete="off">
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
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'usuario') : '' ?></span>
                </div>
                <!-- <div class="form group">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" name="type" placeholder="Elija Nivel de usuario"
                    value="<?= set_value('type'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'type') : '' ?></span>
                </div> -->
                <div class="form-group col-md-6">
                    <label for="inputState">Nivel del Usuario</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected></option>
                        <option>Básico</option>
                        <option>General</option>
                        <option>Administrador</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Escriba su contraseña" value="<?= set_value('password'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Confirme contraseña</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Repita su contraseña" value="<?= set_value('cpassword'); ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                </div><br>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                </div>
            </form>
            <br>
            <a href="<?= site_url('/auth') ?>">Ya tengo una cuenta registrada</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('bootstrap/js/jquery.min.js') ?>"></script>

    <script src="<?= base_url('bootstrap/js/sb-admin-2.min.js') ?>"></script>



</body>

</html>