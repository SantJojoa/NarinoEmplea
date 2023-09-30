<?php
    include("../../assets/config/cnx_bd.php");
    $name=$_POST['name'];
    $l_name=$_POST['l_name'];
    $sl_name=$_POST['sl_name'];
    $ced=$_POST['ced'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="insert into user(name,l_name,sl_name,ced,email,pass) 
        VALUES('$name','$l_name','$sl_name','$ced','$email','$pass')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Registro completo')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/index.html");
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }


?>
