<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["id_usuario"]) and isset($_SESSION["username"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/loginuser.html");
    }

    $username = empty($_POST['name']) ? NULL : $_POST['name'];
    $l_name = empty($_POST['l_name'] )? NULL : $_POST['l_name'];
    $sl_name = empty($_POST['sl_name']) ? NULL : $_POST['sl_name'];
    $ced = empty($_POST['ced']) ? NULL : $_POST['ced'];
    $email = empty($_POST['email']) ? NULL : $_POST['email'];
    $pass = empty($_POST['pass']) ? NULL : $_POST['pass'];   

    $cedula = $_SESSION['id_usuario'];

    $sql="update user set 
            name='$username',
            l_name='$l_name',
            sl_name='$sl_name',
            ced='$ced',
            email='$email',
            pass='$pass'
        where
            ced =  '$cedula'
    ";
    $_SESSION['username']=$username;
    $_SESSION['l_name']=$l_name;
    $_SESSION['sl_name']=$sl_name;
    $_SESSION['id_usuario']=$ced;
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;

    if ($conn->query($sql)===TRUE){
        echo"<script>alert('Datos Actualizados')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homeuser.php");
    }


?>