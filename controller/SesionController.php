<?php session_start();

require_once 'config/DataBase.php';
    if(isset($_SESSION['usuario'])){
            header('Location: index.php?c=empleado&a=listTurno');
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = hash('sha512', $_POST['password']);
    }

    try {
        $mdb =  DataBase::getDb();
        $sql = "SELECT * FROM Empleado WHERE idEmpleado =".$usuario." AND contrasenia = ".$password;
        $temp = $mdb->prepare($sql);
        $temp->execute();
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $resultado = $temp->fetch();
    if($resultado != false){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php?c=empleado&a=listTurno');
    }

    require_once 'view/header.php';
    require_once 'view/empleado/list.php';
    require_once 'view/footer.php';
?>

