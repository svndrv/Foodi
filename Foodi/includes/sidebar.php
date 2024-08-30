<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

<div class="barra-lateral">
    <div>
        <div class="nombre-pagina">
            <!-- <img src="img/icons/foodi.png" alt=""> -->
            <ion-icon id="cloud" name="reorder-three-outline"></ion-icon>
            <span>Foodi</span>
        </div>
        <button class="boton">
            <ion-icon name="add-outline"></ion-icon>
            <span>Create new</span>
        </button>
    </div>

    <nav class="navegacion">
        <ul>
            <li>
                <a id="inbox" href="index.php?view=inicio">
                    <ion-icon name="home-outline"></ion-icon>
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="index.php?view=platos">
                    <ion-icon name="restaurant-outline"></ion-icon>
                    <span>Platos</span>
                </a>
            </li>
            <li>
                <a href="index.php?view=calendario">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>Calendario</span>
                </a>
            </li>
            <li>
                <a href="index.php?view=suministros">
                    <ion-icon name="cart-outline"></ion-icon>
                    <span>Suministros</span>
                </a>
            </li>
        </ul>
    </nav>

    <div>
        <div class="linea"></div>

        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Dark Mode</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">

                    </div>
                </div>
            </div>
        </div>




        <div class="usuario">
            <img src="img/user.jpg" class="me-2">
            <div class="info-usuario">
                <div class="nombre-email">
                    <span class="nombre">User</span>
                    <span class="email">user@gmail.com</span>
                </div>

                <a class="drop dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon></a>
                <ul class="dropdown-menu mb-2 mx-1">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>