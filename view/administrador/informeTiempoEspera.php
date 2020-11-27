<?php if(!$show) { ?>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1>Informes</h1>
                <nav>
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?c=administrador&a=informe">Turnos Emitidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?c=administrador&a=informeAtendido">Turnos Atendidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?c=administrador&a=informeProductividad">Productividad Empleados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?c=administrador&a=informeTiempoEspera">Tiempo de Espera</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="card-body">
                <form action="index.php?c=administrador&a=informeTiempoEspera" method="post">
                    <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
                    <button type="submit" class="btn btn-lg btn-success pull-right" name="guardar"><i class="fa fa-plus"></i> Aceptar</button>
                    <div class="container center">
                        <div class="form-group row d-flex justify-content-center">
                            <label class="col-form-label-lg col-sm-12 col-md-12 col-form-label-lg">
                                Seleccione las Colas
                            </label>
                            <div class="form-check col-md-3 col-sm-3 border border-dark align-items-center rounded p-4 m-1 bg-light">
                                <label class="col-form-label-lg">
                                    <input type="checkbox" class="form-check-input" name="colas[]" value="-1">Todas
                                </label>
                            </div>
                            <?php foreach($colas as $cola) {
                                echo "<div class='form-checkform-check col-md-3 col-sm-3 border border-dark rounded p-4 m-1 bg-light'>
                            <label class='col-form-label-lg mr-1'>
                            <input type='checkbox' class='form-check-input' name='colas[]' value=".$cola->getIdCola().">".$cola->getNombreCola()."
                            </label>
                            </div>";
                            }?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } else{?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1 class="center">Informe de Tiempo de Espera</h1>
                <div class="float-right" style="font-size: 1.2em;"><b>Fecha: <?php echo date("d-m-Y")?></b></div>
            </div>
            <div class="card-body">
                <table class="table table-light table-hover">
                    <thead>
                    <tr>
                        <th scope="col" style="font-size: 2em">Cola de Atención</th>
                        <th scope="col" style="font-size: 2em">Tiempo de Espera Menor</th>
                        <th scope="col" style="font-size: 2em">Tiempo de Espera Promedio</th>
                        <th scope="col" style="font-size: 2em">Tiempo de Espera Maximo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($informeTiempoEspera as $itemInforme) {
                        echo "<tr>
                            <th scope='row' style='font-size: 2em'>" . Cola::getNombreColaObjeto($itemInforme[0]['idCola']) . "</th>
                            <td style='font-size: 2em'>" . $itemInforme[0]['menorTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $itemInforme[0]['medioTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $itemInforme[0]['maximoTiempo'] ."</td>
                        </tr>";

                    }
                    echo "<tr>
                            <th scope='row' style='font-size: 2em'>Promedio General de Colas</th>
                            <td style='font-size: 2em'>" . $informeTiempoGeneral[0]['menorTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $informeTiempoGeneral[0]['medioTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $informeTiempoGeneral[0]['maximoTiempo'] ."</td>
                        </tr>";
                    ?>
                    </tbody>
                </table>
                <a class="btn btn-lg btn-primary" href="index.php?c=administrador&a=informe"><i class="fa fa-arrow-left"></i> Volver</a>
                <button id="printChart" class="btn btn-success btn-lg pull-right" onclick="window.print()"><i class="fa fa-print"></i>Imprimir</button>
            </div>
        </div>
    </div>
<?php }?>