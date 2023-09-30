<?php
    //Inicia una nueva sesión o reanuda la existente 
    session_start(); 
    //Destruye toda la información registrada de una sesión
    session_destroy(); 
	
    //Redirecciona a la página de login
    echo "<script>alert('La sesión se cerro de manera correcta.)</script>";
    header('location: http://localhost/NarinoEmplea/index.html'); 
?>