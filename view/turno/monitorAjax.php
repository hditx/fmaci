<html>
<head>
    
</head>
<body>
    <div id="refresh"></div>
    
    <script type="text/javascript">
        dis();
        function dis(){
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "view/turno/refresh.php", false);
            xmlhttp.send(null);
            document.getElementById("refresh").innerHTML=xmlhttp.responseText;
        }
    </script>
</body>
</html>
