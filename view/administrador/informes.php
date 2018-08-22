<?php if(!$show) { ?>
<div class="container">
   <div class="row">
        <form action="index.php?c=administrador&a=informe" method="post" class="bg-light col-sm-9 col-md-9 offset-md-2 offset-sm-2">
            <div class="form-group row">
                <label class="col-form-label-lg col-sm-7 col-md-7 col-form-label-lg offset-md-5 offset-sm-5">
                    Colas: 
                </label>
                <div class="form-check col-md-3 col-sm-3 offset-sm-3 offset-md-3">
                    <label class="col-form-label-lg">
                        <input type="checkbox" class="form-check-input" name="colas[]" value="-1">Todas
                    </label>
                </div>
                    <?php foreach($colas as $cola) { 
                        echo "<div class='form-checkform-check col-md-3 col-sm-3 offset-sm-3 offset-md-3'>
                        <label class='col-form-label-lg'>
                        <input type='checkbox' class='form-check-input' name='colas[]' value=".$cola->getIdCola().">".$cola->getNombreCola()."
                        </label>
                        </div>";
                    }?>
                
            </div>
            <div class="form-group offset-md-2 offset-sm-2">
                <label class="col-form-label-lg">Fecha Inicio</label>
                <input type="date" name="fechaInicio">
                <label class="col-form-label-lg">Fecha Fin</label>
                <input type="date" name="fechaFin">
            </div>
            <input type="submit" class="btn bnt-secondary btn-lg offset-md-3 col-sm-6 col-md-3"value="Aceptar" name="Aceptar">
            <a class="btn btn-lg btn-secondary col-sm-6 col-md-3" href="index.php">Volver</a>
        </form>
    </div>
</div>
<?php } else{?>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<a class="btn btn-lg btn-secondary btn-block col-md-2 col-sm-12 offset-md-5" href="index.php?c=administrador&a=informe" >Volver</a>
<script type="text/javascript" src="config/js/canvasjs.min.js"></script>
<script type="text/javascript" src="config/js/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
	window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
		  text: "Turnos emitidos"
		},
		axisX:{      
			valueFormatString: "DD-MM-YY" ,
			labelAngle: -50
		},
		data: [
		<?php 
            foreach($seleccionadas as $fila){
                $fechas = Cola::fechasEstadistica($fechaInicio, $fechaFin, $fila->getIdCola());
                echo "{
					type: 'stackedColumn',
                    showInLegend: true,
                    legendText: '".Cola::getNombreColaObjeto($fila->getIdCola())."',
					dataPoints: [";
                foreach($fechas as $d){
                    echo "{ y: ".$d['cantidad'].", label: ".json_encode($d['fecha'])."},";
                }
				echo "] },";
			}
		?>
		]
		});
		chart.render();
	}
</script>
<?php }?>