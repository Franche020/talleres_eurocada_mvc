<main class="contenedor">
    <?php include_once __DIR__ .'/../templates/alertas.php'?>
    <form method="POST">

        <fieldset>
            <div class="entrada">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" required>
            </div>
            <input type="submit" value="Enviar" class="boton">
            </fieldset>
    </form>

</main>