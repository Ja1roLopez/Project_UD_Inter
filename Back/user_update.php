<?php

    include '../db/conexion.php';

    if(isset($_POST['update'])){
        $user_id = $_POST['usuario_id'];
        $names = $_POST['updt_nombre'];
        $lastname = $_POST['updt_apellido'];
        $birth = $_POST['updt_birth'];
        $mail = $_POST['updt_email'];
        
    

    mysqli_query($conexion, "UPDATE users SET
        names = '$names', lastname = '$lastname', birth = '$birth',
        mail = '$mail' WHERE id=$user_id");

        session_start();
        $_SESSION['id'] = $user_id;
        $_SESSION['nombre'] = $names;
        $_SESSION['apellido'] = $lastname;
        $_SESSION['nacimiento'] = $birth;
        $_SESSION['correo'] = $mail;
        
    header('location:../app/index.html');
}
?>