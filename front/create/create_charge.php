<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/loginuser.html");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION ['name'] ?> | Crear Cargo</title>
    <link rel="stylesheet" href="../../assets/css/stylecompany.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">
</head>
<body>
    <form action="http://localhost/NarinoEmplea/back/create/create_charge.php" method="post">
        <h1>Crear Cargo</h1>
        <div class="inputBox">
            <input name="name" type="text" placeholder="Nombre empresa" value="<?php echo $_SESSION["name"]; ?>" readonly required>
        </div>
        <div class="inputBox">
            <input name="charge" type="text" placeholder="Cargo"  required>
        </div>
        <div class="inputBox">
            <input type="submit" value="Crear Cargo">
        </div>
    </form>
</body>
</html>