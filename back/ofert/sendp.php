<?php
include("../../assets/config/cnx_bd.php");
$id=$_GET['id'];
$ced=$_GET['ced'];
$sql="insert into applications(ced,id_v) 
        VALUES('$ced','$id')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Se ha postulado correctamente')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/pages/homeuser.php");
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }
?>