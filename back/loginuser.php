<?php
    include("../assets/config/cnx_bd.php"); 
    session_start(); //Crear Sesion

    if(isset($_SESSION["id_usuario"]) and isset($_SESSION["username"])){ 
        header("Location: http://localhost/NarinoEmplea/front/pages/homeuser.php");
    }

    if(!empty($_POST)){
        $rows = 0;

        $ced=$_POST['ced'];
        $pass=$_POST['pass'];
        $error = '';

        $sql="select * from user where ced=$ced and pass='$pass'";

        $result = $conn->query($sql);
        $rows = $result->num_rows;

        if($rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['username']=$row['name'];
            $_SESSION['l_name']=$row['l_name'];
            $_SESSION['sl_name']=$row['sl_name'];
            $_SESSION['id_usuario']=$row['ced'];
            $_SESSION['email']=$row['email'];
            $_SESSION['pass']=$row['pass'];
            header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homeuser.php");
        } else{
            echo"<script>alert('Usuario no encontrado')</script>";
            header("refresh:0;url=http://localhost/NarinoEmplea/front/login/loginuser.html");
        }
    }
?>


