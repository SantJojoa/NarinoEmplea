<?php
    include("../../assets/config/cnx_bd.php");
    $name=$_POST['name'];
    $charge=$_POST['charge'];
    $req=$_POST['req'];
    $tel=$_POST['tel'];
    $details=$_POST['details'];
    $sql="insert into ofert(name,charge,req,tel,details) 
        VALUES('$name','$charge','$req','$tel','$details')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Oferta publicada')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homecompany.phpx");
    }else{
        echo"<script>alert('La oferta no se pudo publicar')</script>";
    }
?>
