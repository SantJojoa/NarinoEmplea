<?php
    include("../../assets/config/cnx_bd.php");
    $name=$_POST['name'];
    $charge=$_POST['charge'];
    $sql="insert into charge(name,charge) 
        VALUES('$name','$charge')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Cargo creado')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homecompany.php");
    }else{
        echo"<script>alert('El cargo no se pudo publicar')</script>";
    }
?>
