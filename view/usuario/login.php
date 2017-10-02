<br><br><h1 align="center">Iniciar Sesion</h1>
<div align="center"><br>
    <form method="POST" action="index.php?c=usuario&a=validateSession" align="center" name="login">
    <div>
        <img class="userbox" src="view/images/user.ico" height="15px" width="15px" > <input name="usuario" autofocus class="user" type="password" placeholder="Usuario" <?php switch ($_REQUEST['monitor']){case 1: echo "value='24'";break; case 2: echo "value='23'";break;default: echo "value=''";break;}?>>
    </div><br/>
	<input type="submit" value="Entrar">
</form>
</div>

