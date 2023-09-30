<?php
    include("../../assets/config/cnx_bd.php"); 
    session_start(); //Crear Sesión

    if(isset($_SESSION["email"]) and isset($_SESSION["pass"])){ 
        header("Location: http://localhost/NarinoEmplea/front/pages/homecompany.php");
    }

    if(!empty($_POST)){
        $rows = 0;

        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $error = '';

        $sql="select * from company where email='$email' and pass='$pass'";

        $result = $conn->query($sql);
        $rows = $result->num_rows;

        if($rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['name']=$row['name'];
            $_SESSION['nit']=$row['nit'];
            $_SESSION['des']=$row['des'];
            $_SESSION['email']=$row['email'];
            $_SESSION['pass']=$row['pass'];
            header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homecompany.php");
        } else{
            echo"<script>alert('Usuario no encontrado')</script>";
            header("refresh:0;url=http://localhost/NarinoEmplea/front/login/logincompany.html");
        }
    }
?>


