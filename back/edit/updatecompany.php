<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/logincompany.html");
    }

    $name = empty($_POST['name']) ? NULL : $_POST['name'];
    $nit = empty($_POST['nit'] )? NULL : $_POST['nit'];
    $des = empty($_POST['des']) ? NULL : $_POST['des'];
    $ced = empty($_POST['email']) ? NULL : $_POST['email'];
    $pass = empty($_POST['pass']) ? NULL : $_POST['pass'];   

    $email = $_SESSION['email'];

    $sql="update company set 
            name='$name',
            nit='$nit',
            des='$des',
            email='$email',
            pass='$pass'
        where
            name =  '$name'
    ";
    $_SESSION['name']=$name;
    $_SESSION['nit']=$nit;
    $_SESSION['des']=$des;
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;

    if ($conn->query($sql)===TRUE){
        echo"<script>alert('Datos Actualizados')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homecompany.php");
    }


?>