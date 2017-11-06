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
    
    <script>
        $(document).on("ready", function(){
            function reloadTurno(){
                $.get('index.php?c=turno&a=updateMonitorImg', function(data){
                    $("#refreshImg").html(data);
                }
                );
            }
            setInterval(reloadTurno,12000);
        });

    </script>
    
</head>
<body>
    <div id="refreshImg"></div>
    <div id="refresh"></div>
</body>
</html>
