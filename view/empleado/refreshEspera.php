<div class="d-flex col-sm-12 col-md-12 row justify-content-between">
    <div class="cuadrado">
        <div class="letraCuadrado"><?= Turno::getLetra($turno->getIdCola())."".$turno->getPosicion()?></div>
    </div>
    <div class="rectangulo col-sm-8 col-md-8">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <b><?= Cola::getNombreColaObjeto($turno->getIdCola())?></b>
            </div>
            <div class="col-sm-4 col-md-4 offset-sm-3 offset-md-3">
                <b><?= $turno->getHora()?></b>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 offset-sm-1 offset-md-1 horaEspera">
            <b><?= Turno::getHoraObjeto($turno->getIdTurno())?></b>
        </div>
    </div>
</div>
