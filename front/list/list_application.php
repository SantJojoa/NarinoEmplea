<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/loginuser.html");
    }
    $name_company=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $_SESSION ['name'] ?> | Ver Postulantes</title>
    <link rel="stylesheet" href="../../assets/css/stylecompany.css">
    <link rel="icon" href="../../assets/img/NE ico nb.png">
</head>
<body>
    <table>
        <tr> 
            <th>Nombre</th>
            <th>1er.Apellido</th>
            <th>2do.Apellido</th>
            <th>Correo</th>
            <th>Oferta</th>
            <th></th>
        </tr>
        <?php 
            $sql="select
                o.id as ofert_id,
                a.id,
                u.name, 
                u.l_name, 
                u.sl_name, 
                u.email,
                o.charge
                from
                applications a inner join
                ofert o
                on a.id_v = o.id inner join
                user u
                on a.ced = u.ced 
                where o.name='$name_company' and o.status=1";
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
                            <td> <a href ='http://localhost/NarinoEmplea/back/ofert/status.php?id=".$row['id']."&s=c&ofert_id=".$row['ofert_id']."'><img src = '../../assets/img/agree.png' width='50px'></a></td>
                        </tr>";
                }
            } else {
            }
        ?>
    </table>
</body>
</html>