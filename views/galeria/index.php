<main class="contenedor">
    <h3>Galeria de Fotos</h3>
    <p>En nuestra galería puede ver algunos de los trabajos realizados recientemente en nuestro taller de Torres de la Alameda. Disponemos de equipos de última generación y booths de pintura para dejar su vehículo como el primer día.</p> <p>Consulte también nuestras ofertas especiales en cambio de aceite y mantenimiento integral de motores.</p>
    <div class="galeria">

    <?php foreach($galeria as $imagen) { ?> 

        <picture class="galeria--imagen">
            <img id="img<?php echo $imagen->id ?>" src="fotos/miniaturas/thumb_<?php echo $imagen->nombre_imagen ?>.jpg" alt="Imagen talleres Eurocada, taller chapa y pintura Torres de la Alameda Madrid">
        </picture>

    <?php } ?>
    </div>
</main>
