<section class="hero contenedor"></section>
<main class="contenedor">
    <p>Accede a nuestra calculadora de pintura para calcular el coste aproximado de pintar tu coche con nosotros</p>
    <a href="/calculadora-pintura" class="boton">Calculadora</a>
</main>

<section class="galeria contenedor">
    <h3>Nuestro Taller</h3>
    <div class="galeria-imagenes">
        <picture>
            <source type="image/avif" srcset="build/img/coche azul.avif">
            <source type="image/webp" srcset="build/img/coche azul.webp">
            <img src="build/img/coche azul.jpg" alt="Descripción de la imagen">
        </picture>
        <picture>
            <source type="image/avif" srcset="build/img/coche rojo.avif">
            <source type="image/webp" srcset="build/img/coche rojo.webp">
            <img src="build/img/coche rojo.jpg" alt="Descripción de la imagen">
        </picture>
        <picture>
            <source type="image/avif" srcset="build/img/taller fuera.avif">
            <source type="image/webp" srcset="build/img/taller fuera.webp">
            <img src="build/img/taller fuera.jpg" alt="Descripción de la imagen">
        </picture>
        <picture>
            <source type="image/avif" srcset="build/img/taller 2.avif">
            <source type="image/webp" srcset="build/img/taller 2.webp">
            <img src="build/img/taller 2.jpg" alt="Descripción de la imagen">
        </picture>
    </div>
</section>

<section class="ubicacion contenedor">
    <h3>Donde Estamos</h3>
    <p>C/ LONDRES Nº 2-4 Torres de la Alameda Spain</p>
    <div class="mapa-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.5542007217923!2d-3.3750586274984022!3d40.408754394960305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42462d8e4f4c3d%3A0x78da849c8306d533!2sTalleres%20Eurocada%20SL!5e0!3m2!1ses!2ses!4v1692713763490!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>

<section class="contacto contenedor">
    <h3>Contacta con nosotros</h3>
    <form method="POST">
        <fieldset>

            <div class="entrada">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Escribe aquí tu Nombre">
            </div>
            <div class="entrada">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Escribe aquí tu Apellido">
            </div>
            <div class="entrada">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Escribe aquí tu Email">
            </div>
            <div class="entrada">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Escribe aquí tu Teléfono">
            </div>
            <div class="entrada radio">
                <label>Tipo de contacto</label>
                <div>
                    <input type="radio" id="contacto_telefono" name="contacto" value="telefono">
                    <label for="contacto_telefono">Teléfono</label>
                </div>
                <div>
                    <input type="radio" id="contacto_email" name="contacto" value="email">
                    <label for="contacto_email">Email</label>
                </div>
            </div>
            <input type="submit" value="Contactadme" class="boton">
        </fieldset>
    </form>
</section>