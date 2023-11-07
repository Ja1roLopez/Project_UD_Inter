<?php
   $conexion = new mysqli("localhost", "jlopez","0074","Flexdesk_DB");

   if ($conexion->connect_errno){
        echo "error de conexiòn";
        exit();
    }else{
        echo "Funciona!!!";
    }
?>