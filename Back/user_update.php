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
    
    
    
    header('location:../app/profile_settings.php?status=1');
}
?>