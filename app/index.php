<?php 

    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apelido'];
    $nacimiento = $_SESSION['nacimiento'];
    $mail = $_SESSION['correo'];

    echo '<h1>Hola '.$nombre.' '.$apellido.'</h1>';
?>