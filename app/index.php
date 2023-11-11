<?php 

    session_start();
    include '../db/conexion.php';

    $id_user = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $mail = $_SESSION['correo'];

    echo '<h1>Hola '.$nombre.''.$apellido.'</h1>';
?>