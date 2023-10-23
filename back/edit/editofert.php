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
    <?php 
    $id=$_GET['id'];
    $sql="select * from ofert where id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); 
        $charge=$row['charge'];
        $req=$row['req'];
        $tel=$row['tel'];
        $details=$row['details'];
    ?>
<form action="http://localhost/NarinoEmplea/back/edit/updateofert.php" method="post">
        <h1>Editar Oferta</h1>
        <div class="inputBox">
            <input name="name" type="text" placeholder="Nombre empresa" value="<?php echo $_SESSION["name"]; ?>" readonly required>
        </div>
        <div class="inputBox">
        <h4>Cargo</h4> 
        <input name="charge" type="text" placeholder="Cargo" value="<?php echo $row["charge"]; ?>" readonly required>
        </div>
        <div class="inputBox">
            <h4>Teléfono</h4> 
            <input name="tel" placeholder="Contacto" type="text" value="<?php echo $row["tel"]; ?>" required>
        </div>
        <div class="inputBox">
            <h4>Requisitos</h4> 
            <textarea name="" id="" cols="50" rows="10"
            > <?php echo $row['req']; ?></textarea>
        </div>
        <div class="inputBox">
            <h4>Detalles</h4> 
            <textarea  name="" id="" cols="50" rows="10"
            > <?php echo $row['details']; ?></textarea>
        </div>
        <div class="inputBox">
            <input type="submit" value="Actualizar Vacante">
        </div>
    </form>
</body>
</html>