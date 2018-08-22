<br>
<div class="container" align="center"><br>
    <h1 align="center" class="text-light">Iniciar Sesion</h1><br>
    <form method="POST" action="index.php?c=usuario&a=validateSession" align="center" name="login" >
    <div class="form-group row">
        <div class="col-md-2 col-sm-2 offset-md-2 offset-sm-2">
            <img class="img-fluid rounder form-control" src="view/images/user.ico">
        </div>
        <div class="col-md-4 col-sm-4"><br><br><br>
            <input name="usuario" autofocus class="form-control" type="password" placeholder="Usuario" <?php switch ($_REQUEST['monitor']){case 1: echo "value='24'";break; case 2: echo "value='23'";break;default: echo "value=''";break;}?>>
        </div>
    </div><br/>
	<input class="btn btn-secondary btn-lg" type="submit" value="Entrar">
</form>
</div>

