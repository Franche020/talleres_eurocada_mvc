<main class="contenedor">
    <?php include_once __DIR__ .'/../templates/alertas.php'?>
    <form method="POST">

        <fieldset>

            <div class="entrada">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <input type="submit" value="Recuperar Password" class="boton">
            </fieldset>
    </form>

</main>