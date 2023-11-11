<?php

    $server = "localhost";
    $user = "admin";
    $pass = "0074";
    $db = "Flexdesk_DB";

   $conexion = new mysqli($server,$user,$pass,$db);

   if ($conexion->connect_errno){
        echo "error de conexiòn";
        exit();
    }
?>