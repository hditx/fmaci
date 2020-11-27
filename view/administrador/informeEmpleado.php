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
                            <a class="nav-link active" href="index.php?c=administrador&a=informeProductividad">Productividad Empleados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?c=administrador&a=informeTiempoEspera">Tiempo de Espera</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="card-body">
                <form action="index.php?c=administrador&a=informeProductividad" method="post">
                    <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
                    <button type="submit" class="btn btn-lg btn-success pull-right" name="guardar"><i class="fa fa-plus"></i> Aceptar</button>
                    <div class="container center">
                        <div class="form-group row d-flex justify-content-center">
                            <label class="col-form-label-lg col-sm-12 col-md-12 col-form-label-lg">
                                Seleccione los Empleados
                            </label>
                            <div class="form-check col-md-3 col-sm-3 border border-dark align-items-center rounded p-4 m-1 bg-light">
                                <label class="col-form-label-lg">
                                    <input type="checkbox" class="form-check-input" name="empleados[]" value="-1">Todos
                                </label>
                            </div>
                            <?php foreach($empleados as $empleado) {
                                echo "<div class='form-checkform-check col-md-3 col-sm-3 border border-dark rounded p-4 m-1 bg-light'>
                            <label class='col-form-label-lg mr-1'>
                            <input type='checkbox' class='form-check-input' name='empleados[]' value=".$empleado->getIdEmpleado().">".$empleado->getNombre(). " ". $empleado->getApellido() ."
                            </label>
                            </div>";
                            }?>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } else{?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="center">Informe de Tiempo de Productividad de Empleado</h1>
                    <div class="float-right" style="font-size: 1.2em;"><b>Fecha: <?php echo date("d-m-Y")?></b></div>
                </div>
                <div class="card-body">
                    <table class="table table-light table-hover">
                        <thead>
                        <tr>
                            <th scope="col" style="font-size: 2em">Empleados</th>
                            <th scope="col" style="font-size: 2em">Tiempo de Atención Menor</th>
                            <th scope="col" style="font-size: 2em">Tiempo de Atención Promedio</th>
                            <th scope="col" style="font-size: 2em">Tiempo de Atención Maximo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($informeProductividad as $itemInforme) {
                            echo "<tr>
                            <th scope='row' style='font-size: 2em'>" . Empleado::getNombreObjeto($itemInforme[0]['idEmpleado']) . "</th>
                            <td style='font-size: 2em'>" . $itemInforme[0]['menorTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $itemInforme[0]['medioTiempo'] ."</td>
                            <td style='font-size: 2em'>" . $itemInforme[0]['maximoTiempo'] ."</td>
                        </tr>";

                        } ?>
                        </tbody>
                    </table>
                    <a class="btn btn-lg btn-primary" href="index.php?c=administrador&a=informe"><i class="fa fa-arrow-left"></i> Volver</a>
                    <button id="printChart" class="btn btn-success btn-lg pull-right" onclick="window.print()"><i class="fa fa-print"></i>Imprimir</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>
