<header>
    <a href="/">
        <h1><span class="h1-small">Talleres </span><span class="h1-grande">Eurocada </span><span class="h1-small">Automoción</span></h1>
    </a>
    <div class="header">
        <h2> 
             
            <div class="pueblo">Taller en Torres de la Alameda</div>
            <div class="descripcion">Chapa Pintura Mecánica Lunas</div>
            <div class="descripcion">Trabajamos para todas las Compañías</div>
            <div class="descripcion">Disponemos de coche de sustitución</div>

        </h2>
    </div>

    <nav>
        <div class="redes">
            <a class="facebook" href="https://www.facebook.com/tallereseurocada/" alt="Facebook talleres eurocada taller torres de la alameda madrid" aria-label="Facebook talleres eurocada taller torres de la alameda">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
            </a><?php
            // <a class="instagram" href="#" alt="Enlace facebook talleres eurocada torres de la alameda madrid">
            //     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e5da44" fill="none" stroke-linecap="round" stroke-linejoin="round">
            //         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            //         <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
            //         <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            //         <path d="M16.5 7.5l0 .01" />
            //     </svg>
            // </a> ?>
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
            <li><a href="/" class="">Inicio</a></li>
            <li><a href="/galeria" class="">Galeria</a></li>
            <li><a href="/ubicacion" class="">Donde Estamos</a></li>
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