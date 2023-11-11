<?php 

    session_start();
    include '../db/conexion.php';

    $id_user = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $mail = $_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home FlexDesk</title>
    <link rel="icon" href="../img/Main_Icon.png" type="image/png" sizes="192x192">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/Project_UD_Inter/CSS/app_style.css">    
</head>
<body>
    <section id = "general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>
        <div class="central">

        </div>
    </section>
    <script src="../js/component_menu.js"></script>
</body>
</html>