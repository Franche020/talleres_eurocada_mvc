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
        <p>Precio total I.V.A. Incluido*</p>
        <p class="small">
            *Debes asegurarte de que el color de tu coche no sea mate o tricapa y que tu vehiculo no tenga rasguños superiores a 5cm
        </p>
    </div>
    <div class="formulario contacto contenedor">
        <h3>Contacta con nosotros</h3>
        <fieldset>
            <fieldset>
                <?php
                @include_once __DIR__ . '/../contacto/form-contacto.php';
                @include_once __DIR__ . '/../contacto/imagenes-contacto.php';
                ?>
            </fieldset>
    </div>
    <div class="contenedor submit">

        <input id="submit-calc" type="submit" value="Contactadme" class="boton ">
    </div>
</form>