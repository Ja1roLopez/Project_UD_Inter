<?php

    include '../db/conexion.php';

    if(isset($_POST['register_btn'])){
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $birth = $_POST['birthday'];
        $mail = $_POST['mail'];
        $pass = $_POST['password'];
        
    

    mysqli_query($conexion, "INSERT INTO users (
        names, lastname, birth, mail, pass
    )VALUES('$names', '$lastname', '$birth', '$mail', '$pass')");
   
    header('location:../index.php?status=1');
}
?>