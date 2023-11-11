<?php

    include '../db/conexion.php';

    if(isset($_POST['contacto_btn'])){
        $form_name = $_POST['form_name'];
        $form_mail = $_POST['form_mail'];
        $form_message = $_POST['form_message'];
        
    

    mysqli_query($conexion, "INSERT INTO contacto (
        form_name, form_mail, form_message
    )VALUES('$form_name','$form_mail', '$form_message')");
   
    header('location:../index.php?status=4');
}
?>