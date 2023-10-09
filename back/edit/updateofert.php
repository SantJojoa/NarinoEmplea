<?php 
    include("../../assets/config/cnx_bd.php"); 
    session_start();
    if(!isset($_SESSION["email"]) and isset($_SESSION["pass"]) ){
        header("Location: http://localhost/NarinoEmplea/front/login/logincompany.html");
    }
    $id = empty($_POST['id']) ? NULL : $_POST['id'];
    $name = empty($_POST['name']) ? NULL : $_POST['name'];
    $charge = empty($_POST['charge'] )? NULL : $_POST['charge'];
    $req = empty($_POST['req']) ? NULL : $_POST['req'];
    $tel = empty($_POST['tel']) ? NULL : $_POST['tel'];
    $details = empty($_POST['details']) ? NULL : $_POST['details'];   

    $email = $_SESSION['email'];

    $sql="update ofert set 
            name='$name',
            charge='$charge',
            req='$req',
            tel='$tel',
            details='$details'
        where
            id =  '$id'
    ";
    $_SESSION['name']=$name;
    $_SESSION['charge']=$charge;
    $_SESSION['req']=$req;
    $_SESSION['req']=$req;
    $_SESSION['tel']=$tel;
    $_SESSION['details']=$details;
    if ($conn->query($sql)===TRUE){
        echo"<script>alert('Datos Actualizados')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homecompany.php");
    }


?>