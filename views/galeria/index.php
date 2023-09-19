<main class="contenedor">
    <h3>Galeria de Fotos</h3>
    <div class="galeria">

    <?php foreach($galeria as $imagen) { ?>

        <picture class="galeria--imagen">
            <img id="img<?php echo $imagen->id ?>" src="fotos/miniaturas/thumb_<?php echo $imagen->nombre_imagen ?>.jpg" alt="Imagen talleres Eurocada, taller chapa y pintura Torres de la Alameda Madrid">
        </picture>

    <?php } ?>
    </div>
</main>
