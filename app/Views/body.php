<?php if ($userInfo['type'] == 'Administrador') { ?>
    <div class="mdb-page-content text-center page-intro bg-light">
        <div class="card-group">
            <div class="card text-white bg-secondary mb-0">
                <i class="fas fa-id-card fa-2x card-img-top mt-3  "></i>

                <div class="card-body">
                    <h6 class="card-title">Paciente</h6>
                    <p class="card-text">
                       Gestionar Pacientes.
                    </p> 
                    <a href="#" class="btn btn-primary mb-">Aceptar</a>
                </div>

            </div>
            <div class="card text-white bg-success mb-0">
                <i class="fas fa-vial fa-2x card-img-top mt-3 "></i>
                <div class="card-body">
                    <h6 class="card-title">Exámenes de Laboratorio</h6>
                    <p class="card-text">
                        Gestionar Exámenes.
                    </p> 
                  
                    <a href="#" class="btn btn-primary">Aceptar</a>

                </div>

            </div>
            <div class="card text-white bg-info mb-0">
                <i class="fas fa-clipboard-list fa-2x card-img-top mt-3 "></i>
                <div class="card-body">
                    <h6 class="card-title">Resultados de Laboratorio</h6>
                   <p class="card-text">
                        Buscar entre los registros de exámenes realizados.
                    </p> 
                    <a href="#" class="btn btn-primary">Aceptar</a>

                </div>

            </div>
            <div class="card text-white bg-danger mb-0">
                <i class="fas fa-calculator fa-2x card-img-top mt-3 "></i>
                <div class="card-body">
                    <h6 class="card-title">Ordenes-Presupuestos-Facturación</h6>
                    <p class="card-text">
                       Gestionar los pedidos solicitados.
                    </p> 
                        <a href="#" class="btn btn-primary">Aceptar</a>

                </div>

            </div>


        </div>
    </div>

    <!-- Background image -->
    <div class="p-0 bg-image" style="background-image: url('img/pagina.jpg');height: 626px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <img class="img-fluid" style="max-width:60%;" src="img/logo-lab.png" alt="Logo">
            </div>
        </div>
    </div>
    </div>

    <!-- Background image -->
<?php }?>