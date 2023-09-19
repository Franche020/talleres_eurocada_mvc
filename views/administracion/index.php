<section>
    </section>
    <main class="contenedor">
        <h3>Administracion</h3>
        <a href="/administracion/galeria" class="boton">Administracion Galeria</a>
    <form class="formulario" method="POST">
    <fieldset class="grid-2">
        <legend class="mayus"><p>Precios</p></legend>

        <fieldset>
            <legend><h3>Puertas:</h3></legend>
            <div class="entrada">
                <label for="pieza1" > Puerta izquierda delantera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza1" name="pieza[puerta_del_izq]" value="<?php echo $precio->puerta_del_izq ?>">
            </div>
            <div class="entrada">
                <label for="pieza2">Puerta derecha delantera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza2" name="pieza[puerta_del_der]" value="<?php echo $precio->puerta_del_der ?>">
            </div>
            <div class="entrada">
                <label for="pieza3">Puerta izquierda trasera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza3" name="pieza[puerta_tras_izq]" value="<?php echo $precio->puerta_tras_izq ?>">
            </div>
            <div class="entrada">
                <label for="pieza4">Puerta derecha trasera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza4" name="pieza[puerta_tras_der]" value="<?php echo $precio->puerta_tras_der ?>">
            </div>
        </fieldset>

        <fieldset>
            <legend><h3>Aletas:</h3></legend>
            <div class="entrada">
                <label for="pieza5">Aleta izquierda delantera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza5"  name="pieza[aleta_del_izq]" value="<?php echo $precio->aleta_del_izq ?>">
            </div>
            <div class="entrada">
                <label for="pieza6">Aleta derecha delantera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza6"  name="pieza[aleta_del_der]" value="<?php echo $precio->aleta_del_der ?>">
            </div>
            <div class="entrada">
                <label for="pieza7">Aleta izquierda trasera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza7"  name="pieza[aleta_tras_izq]" value="<?php echo $precio->aleta_tras_izq ?>">
            </div>
            <div class="entrada">
                <label for="pieza8">Aleta derecha trasera:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza8"  name="pieza[aleta_tras_der]" value="<?php echo $precio->aleta_tras_der ?>">
            </div>    

        </fieldset>

        <fieldset>
            <legend><h3>Paragolpes:</h3></legend>
            <div class="entrada">
                <label for="pieza9">Paragolpes delantero:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza9"  name="pieza[paragolpes_del]" value="<?php echo $precio->paragolpes_del ?>">
            </div>
            <div class="entrada">
                <label for="pieza10">Paragolpes trasero:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza10"  name="pieza[paragolpes_tras]" value="<?php echo $precio->paragolpes_tras ?>">
            </div>

        </fieldset>

        <fieldset>
            <legend><h3>Retrovisores:</h3></legend>
            <div class="entrada">
                <label for="pieza11">Retrovisor izquierdo:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza11"  name="pieza[retrovisor_izq]" value="<?php echo $precio->retrovisor_izq ?>">
            </div>
            <div class="entrada">
                <label for="pieza12">Retrovisor derecho:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza12"  name="pieza[retrovisor_der]" value="<?php echo $precio->retrovisor_der ?>">
            </div>

        </fieldset>

        <fieldset>
            <legend><h3>Otros:</h3></legend>
            <div class="entrada">
                <label for="pieza13">Capó delantero:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza13"  name="pieza[capo_del]" value="<?php echo $precio->capo_del ?>">
            </div>
            <div class="entrada">
                <label for="pieza14">Techo:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza14"  name="pieza[techo]" value="<?php echo $precio->techo ?>">
            </div>
            <div class="entrada">
                <label for="pieza15">Portón trasero:</label>
                <input step="0.01" type="number" class="form--pieza" id="pieza15"  name="pieza[porton_tras]" value="<?php echo $precio->porton_tras ?>">
            </div>

        </fieldset>

    </fieldset>
    
    <input type="submit" value="Actualizar" class="boton margin2rem">
    </form>
</main>