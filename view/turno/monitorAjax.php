<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <title>
        Farmacentro
    </title>
    <link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="config/bootstrap/js/jquery.js"></script>
    <script src="config/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.myCarousel').carousel();            
        });
    </script>
    <script type="text/javascript" src="config/jquery-1.7.2.min.js"></script>
    <script>
        $(document).on("ready", function(){
            function reloadTurno(){
                $.get('index.php?c=turno&a=updateMonitor', function(data){
                    $("#refresh").html(data);
                    
                });
            }
            setInterval(reloadTurno,1000);
        });
    </script>
<!--    
    <script>
        $(document).on("ready", function(){
            function reloadImagenes(){
                $.get('index.php?c=turno&a=updateMonitorImg', function(data){
                    $("#refreshImg").html(data);
                }
                );
            }
            setInterval(reloadImagenes,30000);
        });

    </script>
-->    
</head>
<body>
    <div id="refreshImg">
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
            <div class="carousel-inner">
               <div class='item active'>
                    <img src='view/video/<?= $video[0]?>' alt='Imagen 0' width='1200px' height='1300px'>
               </div>
            <?php 
            for($i = 1; $i < $max ; ++$i){ 

               echo "<div class='item'>";
               echo "<img src='view/video/".$video[$i]."' alt='Imagen $i' width='1200px' height='1300px'>";
               echo "</div>";
            }
            ?>
          </div>
        </div>
        </div>
    </div>
    <div id="refresh"></div>
    <div style="position: absolute; top: 80%; right: 5%;"> <a href="https://www.zeitverschiebung.net/es/timezone/america--argentina--ushuaia"> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FArgentina%2FUshuaia" width="100%" height="140" frameborder="0" seamless></iframe> </div>
</body>
</html>
