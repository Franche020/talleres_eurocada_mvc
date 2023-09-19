<main class="contenedor">
    <?php include_once __DIR__ .'/../templates/alertas.php'?>
    <form method="POST">

        <fieldset>
            <div class="entrada">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" required>
            </div>
            <div class="entrada">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <input type="submit" value="Login" class="boton">
            <a href="/olvide" class="boton">Recuperar Password</a>
            </fieldset>
    </form>

</main>