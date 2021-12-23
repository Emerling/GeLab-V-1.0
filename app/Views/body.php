<?php if ($userInfo['type'] == 'Administrador') { ?>
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
            </div>
        </div>
    </div>
    </div>

    <!-- Background image -->
<?php }?>