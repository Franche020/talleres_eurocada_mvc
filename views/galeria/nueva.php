<main class="contenedor">
    <h3>Añadir Imagen</h3>
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <label class="boton archivo" for="file1" id="label-file1">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F6BD2B" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                    <path d="M7 9l5 -5l5 5" />
                    <path d="M12 4l0 12" />
                </svg>
                Imagen 1</label>
            <input id="file1" type="file" name="file1" accept="image/jpeg, image/png, image/tiff" maxFileSize="2000000" required>
            <div class="entrada--checkbox">
                <input type="checkbox" name="resaltar" id="resaltar" value="1">
                <label for="resaltar">Resaltar imagen para mostrarla más arriba</label>
            </div>
            <div class="flex-horizontal">
                <a href="/galeria/administracion" class="boton">Atras</a>
                <input type="submit" value="Añadir" class="boton">
            </div>
        </fieldset>
    </form>
</main>