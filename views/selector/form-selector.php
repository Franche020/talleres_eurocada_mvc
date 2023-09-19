
    <fieldset>
        <legend class="mayus"><h3>Pintar el coche entero</h3></legend>
        <div class="entrada--checkbox">
            <label for="todas-piezas">Todo tu coche por solo <span id="todas-piezas--precio"></span></label>
            <input id="todas-piezas" type="checkbox" name="completo" value="coche_entero">
        </div>
    </fieldset>
    <fieldset class="grid-2">
        <legend class="mayus"><h3>Pintar partes del coche</h3></legend>

        <fieldset>
            <legend><h3>Puertas:</h3></legend>
            <div class="entrada--checkbox ">
                <label for="pieza1" > Puerta izquierda delantera: <span><?php echo $precio->puerta_del_izq ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza1" name="pieza[puerta-del-izq]" value="<?php echo $precio->puerta_del_izq ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza2">Puerta derecha delantera: <span><?php echo $precio->puerta_del_der ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza2" name="pieza[puerta-del-der]" value="<?php echo $precio->puerta_del_der ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza3">Puerta izquierda trasera: <span><?php echo $precio->puerta_tras_izq ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza3" name="pieza[puerta-tras-izq]" value="<?php echo $precio->puerta_tras_izq ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza4">Puerta derecha trasera: <span><?php echo $precio->puerta_tras_der ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza4" name="pieza[puerta-tras-der]" value="<?php echo $precio->puerta_tras_der ?>">
            </div>
        </fieldset>

        <fieldset>
            <legend><h3>Aletas:</h3></legend>
            <div class="entrada--checkbox ">
                <label for="pieza5">Aleta izquierda delantera: <span><?php echo $precio->aleta_del_izq ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza5"  name="pieza[aleta-del-izq]" value="<?php echo $precio->aleta_del_izq ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza6">Aleta derecha delantera: <span><?php echo $precio->aleta_del_der ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza6"  name="pieza[aleta-del-der]" value="<?php echo $precio->aleta_del_der ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza7">Aleta izquierda trasera: <span><?php echo $precio->aleta_tras_izq ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza7"  name="pieza[aleta-tras-izq]" value="<?php echo $precio->aleta_tras_izq ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza8">Aleta derecha trasera: <span><?php echo $precio->aleta_tras_der ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza8"  name="pieza[aleta-tras-der]" value="<?php echo $precio->aleta_tras_der ?>">
            </div>    

        </fieldset>

        <fieldset>
            <legend><h3>Paragolpes:</h3></legend>
            <div class="entrada--checkbox ">
                <label for="pieza9">Paragolpes delantero: <span><?php echo $precio->paragolpes_del ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza9"  name="pieza[paragolpes-del]" value="<?php echo $precio->paragolpes_del ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza10">Paragolpes trasero: <span><?php echo $precio->paragolpes_tras ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza10"  name="pieza[paragolpes-tras]" value="<?php echo $precio->paragolpes_tras ?>">
            </div>

        </fieldset>

        <fieldset>
            <legend><h3>Retrovisores:</h3></legend>
            <div class="entrada--checkbox ">
                <label for="pieza11">Retrovisor izquierdo: <span><?php echo $precio->retrovisor_izq ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza11"  name="pieza[retrovisor-izq]" value="<?php echo $precio->retrovisor_izq ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza12">Retrovisor derecho: <span><?php echo $precio->retrovisor_der ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza12"  name="pieza[retrovisor-der]" value="<?php echo $precio->retrovisor_der ?>">
            </div>

        </fieldset>

        <fieldset>
            <legend><h3>Otros:</h3></legend>
            <div class="entrada--checkbox ">
                <label for="pieza13">Capó delantero: <span><?php echo $precio->capo_del ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza13"  name="pieza[capo-del]" value="<?php echo $precio->capo_del ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza14">Techo: <span><?php echo $precio->techo ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza14"  name="pieza[techo]" value="<?php echo $precio->techo ?>">
            </div>
            <div class="entrada--checkbox ">
                <label for="pieza15">Portón trasero: <span><?php echo $precio->porton_tras ?>€</span></label>
                <input type="checkbox" class="form--pieza" id="pieza15"  name="pieza[porton-tras]" value="<?php echo $precio->porton_tras ?>">
            </div>

        </fieldset>

    </fieldset>
