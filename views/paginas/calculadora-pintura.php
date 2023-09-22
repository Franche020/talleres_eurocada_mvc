<section class="contenedor-hero">
    <picture>
        <source type="image/avif" srcset="build/img/hero.avif">
        <source type="image/webp" srcset="build/img/hero.webp">
        <img src="build/img/hero.jpg" alt="Imagen con los servicios del taller de chapa y pintura Eurocada">
    </picture>
</section>
<section class="contenedor">
    <h3>Selecciona las zonas que deseas pintar</h3>
</section>
<section class="contenedor" id="calculadora">
    <div class="selector">
        <picture class="selector--picture">
            <source type="image/avif" srcset="build/img/coche-calculadora.avif">
            <source type="image/webp" srcset="build/img/coche-calculadora.webp">
            <img src="build/img/coche-calculadora.jpg" alt="Descripción de la imagen">
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
        <h1><span id="precio-total"></span>€</h1>
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