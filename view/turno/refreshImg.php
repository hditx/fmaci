 <div id="izquierda">
     
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class='active'></li>
      <?php 
      for($i = 1; $i < $max ; ++$i)
          echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php 
    for($i = 0; $i < $max ; ++$i){ 
       $clas = ($i == 0) ? "item active" : "item";

       echo "<div class='$clas'>";
       echo "<img src='view/video/".$video[$i]."' alt='Imagen $i' width='1200px' height='1100px'>";
       echo "</div>";
    }
    ?>
  </div>
</div>
</div>
