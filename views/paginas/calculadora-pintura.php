<section class="contenedor-hero">
    <picture>
        <source type="image/avif" srcset="build/img/hero.avif">
        <source type="image/webp" srcset="build/img/hero.webp">
        <img src="build/img/hero.jpg" alt="Imagen con los servicios del taller de chapa y pintura Eurocada">
    </picture>
</section>
<section class="contenedor somos">
    <p>Talleres Eurocada es tu taller de confianza en Torre de la Alameda.</p> <p>Con más de 15 años de experiencia en el sector, disponemos de un equipo de profesionales altamente capacitados que se encargará de arreglar tu vehículo y dejarlo como nuevo.</p><p>Ofrecemos servicios integrales de chapa y pintura, reparación de abolladuras, pulido y abrillantado. También realizamos todo tipo de trabajos mecánicos: cambios de aceite, de pastillas de freno, correas y más Contamos con las herramientas y tecnología más avanzada del sector para garantizar la mejor calidad en cada reparación.</p> <p>Ven a nuestro taller en Torre de la Alameda y confía tu vehículo a nuestros expertos chapistas. ¡Te esperamos!</p>
</section>
<section class="contenedor">
    <h3>Selecciona las zonas que deseas pintar</h3>
</section>
<section class="contenedor" id="calculadora">
    <div class="selector">
        <picture class="selector--picture">
            <source type="image/avif" srcset="build/img/coche-calculadora.avif">
            <source type="image/webp" srcset="build/img/coche-calculadora.webp">
            <img src="build/img/coche-calculadora.jpg" alt="Taller Torres de la alameda Eurocada foto exterior" loading="lazy">
        </picture>
        <div class="selector--svg">
            <?php
            @include_once __DIR__ . '/../selector/selector.php';
            ?>
        </div>

    </div>
</section>
<form method="POST" enctype="multipart/form-data">

    <fieldset class="partes contenedor formulario"> 
        <?php
        @include_once __DIR__ . '/../selector/form-selector.php';
        ?>
    </fieldset>

    <div class="contenedor precio">
        <p class="precio-valor"><span id="precio-total"></span>€</p>
        <p>Precio total sin I.V.A.*</p>
        <p class="small">
            *Debes asegurarte de que el color de tu coche no sea mate o tricapa y que tu vehiculo no tenga rasguños superiores a 5cm <br> Para golpes iguales o superiores a 5cm necesitamos que adjuntes imagenes para poder dar un presupuesto aproximado
        </p>
    </div>
    <div class="formulario contacto contenedor">
        <h3>Contacta con nosotros</h3>
        <!-- //TODO cambiar a H2 pero en color negro -->
        <fieldset>
            <fieldset>
                <?php
                @include_once __DIR__ . '/../contacto/form-contacto.php';
                @include_once __DIR__ . '/../contacto/imagenes-contacto.php';
                ?>
            </fieldset>
    </div>
    <div class="contenedor submit">

        <input id="submit-calc" type="submit" value="Contactadme" class="boton"  disabled>
    </div>
</form>