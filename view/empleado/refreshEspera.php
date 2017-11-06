<div>
    <div class="cuadradoMostrar">
        <div class="letraCuadrado"><?= Turno::getLetra($turno->getIdCola())."".$turno->getPosicion()?></div>
        <div class="rectanguloMostrar">
            <div class="obraSocial"><?= Cola::getNombreColaObjeto($turno->getIdCola())?></div>
            <div class="horaNormal"><?= $turno->getHora()?></div>
            <div class="horaEspera"><?= Turno::getHoraObjeto($turno->getIdTurno())?></div>
        </div>
    </div>
</div>

