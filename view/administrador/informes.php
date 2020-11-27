<?php if(!$show) { ?>
<div class="container">
   <div class="card">
       <div class="card-header text-center">
            <h1>Informes</h1>
            <nav>
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                       <a class="nav-link active" href="index.php?c=administrador&a=informe">Turnos Emitidos</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="index.php?c=administrador&a=informeAtendido">Turnos Atendidos</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="index.php?c=administrador&a=informeProductividad">Productividad Empleados</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="index.php?c=administrador&a=informeTiempoEspera">Tiempo de Espera</a>
                    </li>
                </ul>
           </nav>
       </div>
       <div class="card-body">
            <form action="index.php?c=administrador&a=informe" method="post">
                <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
                <button type="submit" class="btn btn-lg btn-success pull-right" name="guardar"><i class="fa fa-plus"></i> Aceptar</button>
                <div class="container center">
                    <div class="form-group row d-flex justify-content-center">
                        <label class="col-form-label-lg col-sm-12 col-md-12 col-form-label-lg">
                            Seleccione las Colas
                        </label>
                        <div class="form-check col-md-3 col-sm-3 border border-dark align-items-center rounded p-4 m-1 bg-light">
                            <label class="col-form-label-lg">
                                <input type="checkbox" class="form-check-input"n
                                       name="colas[]" value="-1">Todas
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
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label-lg">¿Informe por dia?</label>
                            <select name="selectInforme" id="informe" class="custom-select" onchange="showTypeInforme()">
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row" id="unico">
                        <div class="form-group col-md-12">
                            <label class="col-form-label-lg">Fecha del dia</label>
                            <input type="date" name="fechaDia" class="form-control">
                        </div>
                    </div>
                    <div class="form-row" id="desde-hasta">
                        <div class="form-group col-md-6">
                            <label class="col-form-label-lg">Fecha Desde</label>
                            <input type="date" name="fechaInicio" class="form-control">
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="col-form-label-lg">Fecha Hasta</label>
                            <input type="date" name="fechaFin" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
       </div>
    </div>
</div>
<script type="text/javascript" src="view/administrador/prueba.js"></script>
<?php } else{?>
<div class="container-fluid">
    <div id="chartContainer" style="height: 600px; width: 100%;"></div>
    <a class="btn btn-lg btn-primary" href="index.php?c=administrador&a=informe"><i class="fa fa-arrow-left"></i> Volver</a>
    <button id="printChart" class="btn btn-success btn-lg pull-right"><i class="fa fa-print"></i> Imprimir</button>
</div>
<script type="text/javascript" src="config/js/jquery.canvasjs.min.js"></script>
<script type="text/javascript" src="config/js/canvasjs.min.js"></script>
<script type="text/javascript">
	window.onload = function () {
	    const fecha = new Date()
        const chart = new CanvasJS.Chart("chartContainer", {
            <?php
            echo "title: {
              text: 'Turnos Emitidos ". date("d-m-Y") ." entre ".$fechaInicio." y ".$fechaFin."',
              padding: 10
            },";
            if (!$canvasLine) {
                echo "axisX: {
                    valueFormatString: 'DD-MM-YY',
                    labelAngle: -50
                },
                ";
            } else {
                echo "axisX: {
                    intervalType: 'hour',
                    valueFormatString: 'hh:mm',
                    labelAngle: -50,
                },
                ";
            } ?>
            data: [
            <?php
                if (!$canvasLine) {
                    foreach ($seleccionadas as $fila) {
                        $fechas = Cola::fechasEstadistica($fechaInicio, $fechaFin, $fila->getIdCola());
                        echo "{
                            type: 'stackedColumn',
                            showInLegend: true,
                            legendText: '". Cola::getNombreColaObjeto($fila->getIdCola()) ."',
                            dataPoints: [";
                        foreach ($fechas as $dia) {
                            echo "{ y: ". $dia['cantidad'] .", label: ". json_encode($dia['fecha']) ."},";
                        }
                        echo "] },";
                    }
                } else {
                    foreach ($seleccionadas as $fila) {
                        $turnos = Cola::getTurnosEmitidosDia($fechaInicio, $fila->getIdCola());
                        echo "{
                            type: 'line',
                            showInLegend: true,
                            legendText: '". Cola::getNombreColaObjeto($fila->getIdCola()) ."',
                            dataPoints: [ ";
                        foreach ($turnos as $turno) {
                            echo "{ label: '". $turno['horas'] ."', y: ". $turno['cantidad'] ." },";
                        }
                        echo " ] 
                        },";
                    }
                }
            ?>
            ]
            });

        chart.render();
        document.getElementById("printChart").addEventListener("click",function(){
            chart.print();
        });
	}
</script>
<?php }?>