<?php
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/logincompany.html");
        }
    $name_company=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $_SESSION ['name'] ?> | Ver Ofertas</title>
    <link rel="stylesheet" href="../../assets/css/stylecompany.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">
</head>
<body>
    <table border="1">
        <tr> 
            <td>Nombre Convocatoria</td>
            <td>Total Participantes</td>
            <td>Total Contratados</td>
            <td>Promedio Contratados</td>
            <td>Porcentaje Contratados</td>
        </tr>
        <?php 
            $sql="select charge from ofert where name='$name_company'";
            $result = $conn->query($sql);
            // Verificar si se obtuvieron resultados de la consulta
            if ($result->num_rows > 0) {
                // Recorrer los resultados y generar las opciones del select
                while ($row = $result->fetch_assoc()) {
                    echo "<tr> 
                            <td> ".$row['name']." </td>
                            <td> ".$row['l_name']." </td>
                            <td> ".$row['sl_name']." </td>  
                            <td> ".$row['email']." </td>
                            <td> ".$row['charge']." </td>
                            <td> <a href ='http://localhost/NarinoEmplea/back/ofert/status.php?id=".$row['id']."&s=c&ofert_id=".$row['ofert_id']."'><img src = '../../assets/img/lapiz.png' width='50px'></a></td>
                            <td> <a href ='http://localhost/NarinoEmplea/back/ofert/status.php?id=".$row['id']."&s=r&ofert_id=".$row['ofert_id']."'><img src = '../../assets/img/lapiz.png' width='50px'></a></td>
                        </tr>";
                }
            } else {
                echo "No se encontraron vacantes";
            }
        ?>
    </table>
</body>
</html>