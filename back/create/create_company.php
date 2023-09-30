<?php
    include("../../assets/config/cnx_bd.php");
    $name=$_POST['name'];
    $nit=$_POST['nit'];
    $des=$_POST['des'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="insert into company(name,nit,des,email,pass) 
        VALUES('$name','$nit','$des','$email','$pass')";
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Su empresa se registro correctamente')</script>";
        header("refresh:0;url=http://localhost/NarinoEmplea/front/indexcompany.html");
    }else{
        echo"<script>alert('El registro no se pudo completar)</script>";
    }
?>
