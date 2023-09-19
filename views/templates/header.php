<header>
    <a href="/">
        <h2>Talleres</h2>
        <h1>Eurocada</h1>
        <h2>Automoción</h2>
    </a>
    <nav>
        <div class="redes">
            <a class="facebook" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
            </a>
            <a class="instagram" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M16.5 7.5l0 .01" />
                </svg>
            </a>
        </div>
        <div class="navegacion__boton">
            <div class="navegacion__boton--mostrar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </div>
            <div class="navegacion__boton--cerrar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </div>
        </div>

        <ul class="navegacion__enlaces">
            <li><a href="/galeria" class="">Galeria</a></li>
            <li><a href="/ubicacion" class="">Donde Estamos</a></li>
            <li><a href="/" class="">Calculadora de Pintura</a></li>
            <?php
            if (empty($_SESSION)) {            ?>
                <li><a href="/login" class="">Login</a></li>
            <?php } ?>
            <?php
            if (isset($_SESSION['admin'])) { ?>
                <li><a href="/administracion" class="">Administracion</a></li>
                <?php } 
            if (isset($_SESSION['nombre'])) { ?>
                <li><a href="/logout" class="">Salir</a></li>
                <?php } ?>
            </ul>
        
    </nav>
</header>