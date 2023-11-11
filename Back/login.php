<?php 
    include '../db/conexion.php';

    if(isset($_POST['login_btn'])){
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        

    $consulta = mysqli_query($conexion, "SELECT * FROM users
                                where mail = '$mail' and pass = '$pass'");

    $exist = mysqli_num_rows($consulta);
    
    if ($exist == 1){
        session_start();
        while($datos = mysqli_fetch_array($consulta)){
            $_SESSION['nombre'] = $datos['names'];
            $_SESSION['apelido'] = $datos ['lastname'];
            $_SESSION['nacimiento'] = $datos['birth'];
            $_SESSION['correo'] = $datos['mail'];
        }
        header('location:../app/index.php');
    }else{
        header('location:../index.php?status=3');
    }
}
?>