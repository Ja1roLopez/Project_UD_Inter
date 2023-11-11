<?php
    if(isset($_GET['status'])){
        if($_GET['status'] == 1){
            echo'<div class="success">Registro exitoso</div>';
        } 
        if($_GET['status'] == 3){
            echo'<script>alert("Acceso Denegado")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexDesk: Tu espacio de trabajo flexible ideal</title>
    <link rel="icon" href="img/Main_Icon.png" type="image/png" sizes="192x192">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/Project_UD_Inter/CSS/style.css">    
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="#main"><img src="img/main_icon_nav.png" alt="FlexDesk"></a>
            </div>
            <div id="nav_buttons">
                <button class="login" type="button"  data-bs-toggle="modal" data-bs-target="#loginModal">
                    Inicia Sesion
                </button>
                <button type="button" class="sign_up" data-bs-toggle="modal" data-bs-target="#loginSignin">
                    Registrate
                </button>
        </div>
        </nav>
    </header>
    <!-- Modal Inicio de Sesion -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2" id="loginModalLabel">Iniciar Sesion</h1>
                    <button  button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="Back/login.php" method="POST">
                        <div class="form-floating mb-3">
                            <input name="mail" type="email" class="form-control rounded-3" id="correo" placeholder="name@example.com">
                            <label   label for="floatingInput">Direccion de correo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="pass" type="password" class="form-control rounded-3" id="Password" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <button name="login_btn" class="w-100 mb-2 btn btn-lg rounded-3 modal_login" type="submit">Vamos!</button>
                        <hr class="my-4">
                        <h2 class="fs-5 fw-bold mb-3">O accede con:</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
                            Acceder con X
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
                            Acceder con Facebook
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
                            Acceder con GitHub
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Registro -->
    <div class="modal fade" id="loginSignin" tabindex="-1" aria-labelledby="loginSigninLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2" id="loginSigninLabel">Registrate</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="Back/registro.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" name="names" id="Name" placeholder="Inngresa Tu nombre">
                            <label for="Name">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" name="lastname" id="lastname" placeholder="Ingresa tu Apellido">
                            <label for="Lastname">Apellido</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control rounded-3"  name="birthday" id="Birthday" placeholder="Fecha de nacimiento">
                            <label for="Birthday">Tu fecha de nacimiento</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" name="mail" id="correo" placeholder="name@example.com">
                            <label for="correo">Direccion de correo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" name="password" id="Password" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <hr class="my-4">
                        <button name="register_btn" class="w-100 mb-2 btn btn-lg rounded-3 modal_login" type="submit">Vamos!</button>
                        <small class="text-body-secondary">Al hacer click en Vamos!, aceptas los terminos y condiciones</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="main">
        <div id="color_separator">            
            <div id="main_2">
                <h2 id="slogan">
                    Tu Espacio De Trabajo Flexible Ideal
                </h2>
                <div id="main_get_started">
                    <h3>Como Empezar?</h3><a class='bx bxs-chevron-right' href="#get_started"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="slogan_2">
        <div id="content_slogan">
            <img src="img/Main_Icon.png" alt="">
            <h2>FlexDesk</h2>
            <h3>Donde la colaboración se encuentra <br> con la flexibilidad</h3>
        </div>
    </section>
    <section id="get_started">
        <div class="container_3">
            <h2>Como Empezar?</h2>
            <div class="cards">
                <div class="gallery_card">
                    <div class="card_img">
                        
                    </div>
                    <div>
                        <h3 class="modal_invocator" data-bs-toggle="modal" data-bs-target="#loginSignin">Registrate</h3>
                        <p>Realiza el registro con tus datos</p>
                    </div>
                </div>
                <div class="gallery_card">
                    <div class="card_img">
                        
                    </div>
                    <div>
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="gallery_card">
                    <div class="card_img">
                        
                    </div>
                    <div>
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ambientes">
        <div class="container_4">
            <h1>
                Elige tu ambiente ideal
            </h1>
            <div class="gallery">
                <img src="img/Gallery_1.png" alt="">
                <img src="img/Gallery_2.png" alt="">
                <img src="img/Gallery_3.png" alt="">
            </div>
            
        </div>
    </section>
    <section id="salud">
        <div>
            <div class="container_5">
                <div class="items">
                    <div id="interactive_img">
                        <img src="" alt="">
                    </div>
                    <div>
                        <h2>Espacios altamente saludables</h2>
                        <p>Cada espacio pasa por una estricta verificación para garantizar que proporcione un entorno de trabajo de calidad</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="seguridad">
        <div class="container_6">
            <div class="info_seguridad">
                <div class="seg_title">
                    <h2>Un Espacio Seguro <i class='bx bxs-check-shield' style='color:#ffffff'  ></i></h2>
                </div>
                <div class="seg_body">
                    <h3>Cada miembro reserva su espacio</h3>
                    <p>Asi tenemos un control sobre quienes estuvieron en las locaciones cada día</p>
                </div>
                <div class="seg_body">
                    <h3>Acceso Unico</h3>
                    <p>Solo aquellas personas registradas tendrán acceso</p>
                </div>
            </div>
            
        </div>
        <div class="seg_image">
            <img src="img/secure_img.png" alt="espacio_seguro">
        </div>
    </section>
    <footer>
        <div class="container_7">
            <div class="footer_content">
                <div class="footer_card">
                    <div class="card_content">
                        <h2>Hablemos!</h2>
                        <p>Ponte en contacto y nuestro equipo estarà encantado de ayudarte</p>
                        <button id="mostrarFormularioBtn">Ir</button>
                    </div>
                </div>
                <div class="footer_card">
                    <div class="card_content">
                        <h2>Siguenos!</h2>
                        <div class="icons_sm">
                            <a class="white-text bx bxl-github bx-lg" href="#"></a>
                            <a class="white-text bx bxl-linkedin bx-lg" href="#"></a>
                            <a class="white-text bx bxl-twitter bx-lg" href="#"></a>
                            <a class="white-text bx bxl-instagram-alt bx-lg" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="footer_card">
                    <div class="card_content">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.0817778000255!2d-74.05118802083925!3d4.675613626467032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a921a9166bf%3A0x1c29279b4c345958!2sParque%20de%20la%2093!5e0!3m2!1ses-419!2sco!4v1698860102496!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h2>FlexDesk 2023 <i class='bx bx-copyright' style='color:#ffffff' ></i></h2>
            </div>
        </div>
    </footer>
    <div id="contact" class="" style="display:none;">
        <h2>Formulario de Contacto</h2>
        <form id="contactoForm" method="post" action="/Project_UD_Inter/Back/contacto.php" >
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="form_name" placeholder="Nombre y Apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="form_mail" placeholder="name@example.com" required >
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="form_message" rows="4" placeholder="Cuentanos que sucede" required></textarea>
            </div>
            <button name="contacto_btn" type="submit" class="btn_contact">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
        document.getElementById("mostrarFormularioBtn").addEventListener("click", function() {
        document.getElementById("contact").style.display = "block";
        document.getElementById("contact").scrollIntoView({
            behavior: "smooth"
        });
    });
</script>
    </body>
    
</html>