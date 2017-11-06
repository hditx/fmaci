<!--<div id="izquierda">
    <img src="view/video/<?=/*$video*/""?>" width="1200px">
</div>
-->
<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="config/bootstrap/js/jquery.js"></script>
	<script src="config/bootstrap/js/bootstrap.min.js"></script>
	<script>
	    $(document).ready(function(){
	        $('.myCarousel').carousel();
	    });
	</script>-->

 <div id="izquierda">
     
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <?php for($i = 0; $i < $max ; ++$i){ ?>
      <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?=$i == 0 ? "class='active'" : ""?>></li>
          
      <?php }?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php for($i = 0; $i < $max ; ++$i){ 
       if($i == 0)
           $clas = "item active";
       else
           $clas = "item";
       echo "<div class='".$clas."'>";
       echo "<img src='view/video/".$video[$i]."' alt='Imagen ".$i."' width='1200px' height='1100px'>";
       echo "</div>";
    }?>
    <!--
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>