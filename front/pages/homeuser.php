<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["id_usuario"]) and isset($_SESSION["username"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/loginuser.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username'];?> | Nariño Emplea</title>
    <link rel="stylesheet" href="../../assets/css/styleindex.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">
</head>
<body>
<div class="banner">
        <div class="navbar">
            <img src="../../assets/img/logo.png" class="logo" alt="Logo de Nariño Emplea">
            <ul>
                <li><a href="http://localhost/NarinoEmplea/back/edit/edituser.php"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="http://localhost/NarinoEmplea/back/logout.php">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>¿BUSCAS EMPLEO?</h1>
            <p>Busca la vacante que mas se acomode a tus necesidades a solo un click.</p>              
            <a href = "http://localhost/NarinoEmplea/front/indexcompany.html"><button type="button"><span></span>Buscar Vacantes</button></a> 
        </div>
    </div>
    
</body>
</html>


