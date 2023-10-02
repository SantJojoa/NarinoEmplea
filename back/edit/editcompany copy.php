<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/logicompany.html");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nariño Emplea | Editar Datos</title>
    <link rel="stylesheet" href="../../assets/css/stylecompany.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">

</head>
<body>
    <form action="http://localhost/NarinoEmplea/back/edit/updatecompany.php" method="post">
        <h1>Actualizar Datos</h1>
        <div class="inputBox">
            <input name="name" type="text" placeholder="Nombre(s)" value="<?php echo $_SESSION['name']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="nit" type="text" placeholder="Primer Apellido" value="<?php echo $_SESSION['nit']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="des" placeholder="Segundo Apellido" type="text" value="<?php echo $_SESSION['des']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="email" placeholder="Numero de Cédula" type="text" value="<?php echo $_SESSION['email']; ?>" required>
        </div>
        <div class="inputBox">
            <input name="pass" placeholder="Email" type="password" value="<?php echo $_SESSION['pass']; ?>" required>
        </div>
        <div class="inputBox">
            <input type="submit" value="Actualizar Datos">
        </div>

        <a href="http://localhost/NarinoEmplea/front/pages/homecompany.php" ><font color="#fff ">Regresar </font></a>
    </form>
</body>
</html>