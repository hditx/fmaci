<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <title>
        Farmacentro
    </title>
    <link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="row">
            <div class="col-sm-7 col-md-7">
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
                       <div class="carousel-item active">
                            <img class="d-block w-100"src="view/video/<?= $video[0]?>" alt="Imagen 0">
                       </div>
                        <?php 
                        for($i = 1; $i < $max ; ++$i){ 
                           echo "<div class='carousel-item'>
                           <img class='d-block w-100' src='view/video/".$video[$i]."' alt='Imagen $i'>
                           </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-5">
                <div id="refresh"></div>
            </div>
        </div>
    
    <script type="text/javascript" src="config/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="config/bootstrap/js/bootstrap.min.js"></script>
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
    </body>
</html>
