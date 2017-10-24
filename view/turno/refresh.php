<div id='derecha'>
    <div>
        <div class='monitorTeclaLeft'>Nro</div><div class="monitorTeclaRight"> Vendedor</div>
     </div>
<?php
        foreach ($turnos as $t) {
?>
        <div>
            <div class="monitorTeclaIzq">
                <audio id="audio" src="view/empleado/beep-02.wav" <?=(Turno::getBlink($t->getIdTurno()) == 1)? "autoplay" : "" ?> ></audio>
                <div class=<?= (Turno::getBlink($t->getIdTurno()) == 1)? "blink" : "letra" ?>>
                     <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>
                </div>
                <div class="monitorTeclaDer">
                    <div class="monitorTeclaPosicion"><?= Turno::getNombreEmpleadoMonitor($t->getIdTurno())?></div>
                </div>
            </div>
        </div>
<?php
        }
?>
</div>
<script>
function playSound() {
  var sound = document.getElementById("audio");
  sound.play();
}
</script>