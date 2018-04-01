<div class="row">
    <div class="monitorTeclaLeft letraNaranja col-sm-4 col-md-4">Nro</div>
    <div class="monitorTeclaRight letraNaranja col-sm-8 col-md-8"> Vendedor</div>
<?php
foreach ($turnos as $t) {
?>
    <div class="monitorTeclaLeft col-sm-5 col-md-5 <?=(Turno::getBlink($t->getIdTurno())==1)? "blink" : "letra" ?>">
    <audio id="audio" src="view/turno/store.wav" <?=(Turno::getBlink($t->getIdTurno()) == 1)? "autoplay" : "" ?> ></audio>
         <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>
     </div>
    <div class="monitorTeclaRight col-sm-7 col-md-7 letra">
        <?= Turno::getNombreEmpleadoMonitor($t->getIdTurno())?>
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
