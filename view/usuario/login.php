<br><h1 align="center">Iniciar Sesion</h1>
<div align="center"><br>
    <form method="POST" action="index.php?c=usuario&a=validateSession" align="center" name="login">
    <div>
        <img class="userbox" src="view/images/user.ico" height="15px" width="15px" > <input  name="usuario" class="user" type="text" placeholder="Usuario" <?= ($_REQUEST['monitor']==1) ? "value=24" : "" ?>>
    </div>
    <div>
        <span>  <img class="userbox"  src="view/images/lock.ico" height="30%" width="10%" > <input name="pass" class="user" type="password" placeholder="Contraseña"></span>
    </div>
	<input type="submit" value="Entrar">
</form>
</div>

