<?php
include("../../assets/config/cnx_bd.php");
$id=$_GET['id'];
$s=$_GET['s'];
$ofert_id=$_GET['ofert_id'];
$sql="update applications set status ='$s' where id='$id'";
    if($conn->query($sql)===TRUE){
        if($s=='c'){
            $sql2="update ofert set status =0 where id='$ofert_id'";
            $conn->query($sql2);
            echo"<script>alert('El usuario ha sido contratado')</script>";
            header("refresh:0;url=http://localhost/NarinoEmplea/front/list/list_application.php");
        } else{
            echo"<script>alert('El usuario ha sido rechazado')</script>";
            header("refresh:0;url=http://localhost/NarinoEmplea/front/list/list_application.php");
        }
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }   
?>