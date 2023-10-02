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
    <table border="1">
        <tr> 
            <td>Nombre</td>
            <td>Cargo</td>
            <td>Requisitos</td>
            <td>Teléfono</td>
            <td>Detalles</td>
            <td>--</td>
        </tr>
        <?php 
            $name=$_SESSION['name'];
            $sql="select * from ofert where name='$name'";
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
                            <td> <a href ='http://localhost/NarinoEmplea/back/edit/editofert.php?id=".$row['id']."'><img src = '../../assets/img/lapiz.png' width='50px'></a></td>
                        </tr>";
                }
            } else {
                echo "No se encontraron vacantes";
            }
        ?>
    </table>
</body>
</html>