<?php
    $conexion2= new mysqli("localhost","root", "","baselogin");
    //comprobar conexion
    if(mysqli_connect_errno())   
    {
    printf("Fallo la conexion");
    }
    else{
    //printf("estas conectado");
    }
?>