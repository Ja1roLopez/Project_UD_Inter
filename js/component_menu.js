class menumain extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = `
        <div class="left_menu">
        <div class="profile_resume">
            <img src="../img/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="User">
            <p>Jairo López</p>
            <span>jairo@gmail.com</span>
            <a href="../app/profile_settings.php">Ver Perfil</a>
            </div>
            <hr class="div_contain">
            <nav>
            <ul>
                <a href="../app/index.php"><li><i title="Inicio" class="bx bx-home bx-lg bx-burst-hover"></i></li></a>
                <a href="../app/modulo2.html"><li><i title="Nueva Reserva" class="bx bx-plus bx-lg bx-spin-hover" href=""></i> </li></a>
            </ul>
            </nav>
                <a href=":/db/logout.php">
                <div class="exit">
                <a title="Salir" class="bx bx-exit bx-lg bx-fade-right-hover" style="color:#215A34;"></a>
                </div>
                </a>
            <div class="img_contain">
            <img src="../img/Main_Icon_Dark.png">
            </div>
        </div>
        `;
    }
}

window.customElements.define("menu-main", menumain);
