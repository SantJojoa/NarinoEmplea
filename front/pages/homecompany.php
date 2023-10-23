<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/logincompany.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['name'];?> | Nariño Emplea</title>
    <link rel="stylesheet" href="../../assets/css/styleindexcompany.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">
</head>
<body>
<div class="banner">
        <div class="navbar">
            <img src="../../assets/img/logo.png" class="logo" alt="Logo de Nariño Emplea">
            <ul>
                <li><a href="http://localhost/NarinoEmplea/back/edit/editcompany.php">Actualizar datos</a></li>
                <li><a href="http://localhost/NarinoEmplea/back/logout/logoutcompany.php">Cerrar Sesión</a></li>
            </ul>
        </div>
        <div class="content">
            <h1><?php echo $_SESSION['name']; ?></h1>
            <p>Gestiona las vacantes para tu empresa de manera fácil.</p>              
            <a href = "http://localhost/NarinoEmplea/front/create/create_ofert.php"><button type="button"><span></span>Publicar Vacante</button></a> 
            <a href = "http://localhost/NarinoEmplea/front/create/create_charge.php"><button type="button"><span></span>Crear Cargo</button></a> 
            <a href = "http://localhost/NarinoEmplea/front/list/list_ofert.php"><button type="button"><span></span>Administrar Vacantes</button></a> 
            <a href = "http://localhost/NarinoEmplea/front/list/list_application.php"><button type="button"><span></span>Ver Postulantes</button></a> 
            <!--  <a href = "http://localhost/NarinoEmplea/front/list/list_application.php"><button type="button"><span></span>Estadísticas</button></a> -->
        </div>
    </div>
    
</body>
</html>


