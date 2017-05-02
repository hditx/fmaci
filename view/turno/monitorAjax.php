<html>
<head>
<script type="text/javascript" src="jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="my_script.js">
    $(document).ready(function(){
        function loadRefresh(){
        $("#refresh").load("view/turno/refresh.php");
        setInterval(loadRefresh,1000);
    });}
</script>
</head>
<body>
<div id="refresh"></div>
</body>
</html>