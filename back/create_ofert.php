<?php
    include("../assets/config/cnx_bd.php");
    $company=$_POST['company'];
    $title=$_POST['title'];
    $req=$_POST['req'];
    $contact=$_POST['contact'];
    $details=$_POST['details'];
    $sql="insert into ofert(company,title,req,contact,details) 
        VALUES('$company','$title','$req','$contact','$details')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Registro completo')</script>";
        header("refresh:0;url=http://localhost/Narino_Emplea/index.html");
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }
?>
