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
    <title> <?php echo $_SESSION['username'];?> | Buscar Vacantes </title>
    <link rel="icon" href="../../assets/img/NE ico nb.png">
    <link rel="stylesheet" href="../../assets/css/styleregister.css">
    <link rel="stylesheet" href="../../assets/css/styletable.css">

</head>
<body>
    <form action="http://localhost/NarinoEmplea/front/pages/vacancy.php" method="POST">
    <h1>Buscar Vacantes</h1>
    <div class="inputBox">
            <h4>Elija un cargo:</h4>
            <option value=""></option>
            <?php 
                $sql="select * from ofert group by charge";
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
            </select> <br> <br>
            <div class="inputBox">
            <input type="submit" value="Buscar">
        </div>
    </div>
    </form>
    <table >
        <tr> 
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Requisitos</th>
            <th>Teléfono</th>
            <th>Detalles</th>
            <th></th>
        </tr>
        <?php 
            if (!isset($_POST['submit']) or !isset($_POST['charge'])) {
                $charge=$_POST['charge'] ?? "0";
                $sql="select * from ofert where charge='$charge'";
                $result = $conn->query($sql);
                // Verificar si se obtuvieron resultados de la consulta
                if ($result->num_rows > 0) {
                    // Recorrer los resultados y generar las opciones del select
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr> 
                                <td> ".$row['name']." </td>
                                <td> ".$row['charge']." </td>
                                <td> ".$row['req']." </td>
                                <td> ".$row['tel']." </td>
                                <td> ".$row['details']." </td>
                                <td> <a href ='http://localhost/NarinoEmplea/back/ofert/sendp.php?id=".$row['id']."&ced=".$_SESSION['id_usuario']."'><img src = '../../assets/img/postulation.png' width='35px'></a></td>
                            </tr>";
                    }
                } else {
                    
                }
            }
        ?>
        </table>
</body>
</html>