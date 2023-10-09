<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["id_usuario"]) and isset($_SESSION["username"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/loginuser.html");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nariño Emplea | Editar Usuario</title>
    <link rel="stylesheet" href="../../assets/css/styleregister.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">

</head>
<body>
    <form action="http://localhost/NarinoEmplea/back/edit/update_user.php" method="post">
        <h1>Actualizar Datos</h1>
        <div class="inputBox">
            <input name="name" type="text" placeholder="Nombre(s)" value="<?php echo $_SESSION['username']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="l_name" type="text" placeholder="Primer Apellido" value="<?php echo $_SESSION['l_name']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="sl_name" placeholder="Segundo Apellido" type="text" value="<?php echo $_SESSION['sl_name']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="ced" placeholder="Numero de Cédula" type="text" value="<?php echo $_SESSION['id_usuario']; ?>" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11" minlength="5">
        </div>
        <div class="inputBox">
            <input name="email" placeholder="Email" type="email" value="<?php echo $_SESSION['email']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="pass" placeholder="Contraseña" type="password" value="<?php echo $_SESSION['pass']; ?>" required>
        </div>

        <div class="inputBox">
            <input type="submit" value="Actualizar Datos">
        </div>

        <a href="http://localhost/NarinoEmplea/front/pages/homeuser.php" ><font color="#fff ">Regresar </font></a>
    </form>
</body>
</html>