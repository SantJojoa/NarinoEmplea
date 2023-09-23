<?php
    include("../assets/config/cnx_bd.php");
    $name=$_POST['name'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $sql="insert into company(name,city,address) 
        VALUES('$name','$city','$address')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Registro completo')</script>";
        header("refresh:0;url=http://localhost/Narino_Emplea/index.html");
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }
?>
