<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <title>
        Farmacentro
    </title>
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
    
    
</head>
<body>
    <div id="izquierda">
        <!--<img src="view/video/<?=$video?>" width="1200px"> -->
        <video width="1200px" controls autoplay loop>
            <source src="view/video/<?=$video?>" type="video/mp4">
        </video>
    </div>
    <div id="refresh"></div>
</body>
</html>
