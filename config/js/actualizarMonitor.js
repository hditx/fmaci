<script>
$(document).ready(function(){
            function loadRefresh(){
            $("#refresh").load("refresh.php");
            setInterval(loadRefresh,1000);
});}
</script>
