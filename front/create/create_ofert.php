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
    <title>Nariño Emplea | Registrarse</title>
    <link rel="stylesheet" href="../../assets/css/stylecompany.css">
</head>
<body>
    <form action="http://localhost/NarinoEmplea/back/create/create_ofert.php" method="post">
        <h1>Postular Vacante</h1>
        <div class="inputBox">
            <input name="name" type="text" placeholder="Nombre empresa" value="<?php echo $_SESSION["name"]; ?>" readonly required>
        </div>
        <div class="inputBox">
            <!--<input name="charge" type="text" placeholder="Cargo" required> -->
            <?php 
                $charge=$_SESSION['name'];
                $sql="select * from charge where name='$charge'";
                $result = $conn->query($sql);
            ?>
            <select name="charge">
                <option value=""></option>
                <?php
                    // Verificar si se obtuvieron resultados de la consulta
                    if ($result->num_rows > 0) {
                        // Recorrer los resultados y generar las opciones del select
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['charge'] . "'>" . $row['charge'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay opciones disponibles</option>";
                    }
                ?>
            </select>
        </div>
        <div class="inputBox">
            <input name="req" type="text" placeholder="Requisitos" required>
        </div>
        <div class="inputBox">
            <input name="tel" placeholder="Contacto" type="text" required>
        </div>
        <div class="inputBox">
            <input name="details" placeholder="Detalles" type="text" required>
        </div>
        <div class="inputBox">
            <input type="submit" value="Postular Vacante">
        </div>
    </form>
</body>
</html>