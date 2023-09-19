<section class="contenedor">
    <h3>Administracion de imagenes</h3>
    <div class="botonera">
        <a href="/administracion" class="boton">Administracion</a>
        <a href="/administracion/galeria/nueva-imagen" class="boton">Añadir Imagen</a>
    </div>
    
</section>
<main class="contenedor admin-imagenes">
    <?php foreach ($galeria as $imagen) { ?>
        <div>
            <form action="/administracion/galeria/actualizar" method="post" id="form<?php echo $imagen->id ?>">
                <input type="checkbox" class="resaltar" name="imagen[resaltar]" id="resaltar<?php echo $imagen->id ?>" <?php if($imagen->resaltar === '1'){echo "checked";} ?> value="<?php echo $imagen->resaltar?>">
                <label for="resaltar<?php echo $imagen->id ?>">Resaltar imagen para mostrarla más arriba</label>
                <input type="number" name="imagen[id]" value="<?php echo $imagen->id ?>" hidden>
                <input type="submit" value="" hidden>
            </form>
            <img src="/fotos/miniaturas/thumb_<?php echo $imagen->nombre_imagen ?>.jpg" alt="Galeria fotos taller chapa y pintura Eurocada Torres de la Alameda">
            <form method="POST">
                <input type="number" name="id" value="<?php echo $imagen->id ?>" hidden>
                <input class="boton" type="submit" value="Eliminar Imagen">
            </form>
        </div>
    <?php } ?>

</main>