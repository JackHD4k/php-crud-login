<?php include "includes/header.php"; ?>

<main>
    <div>
        <form action="http://localhost/php-crud-login/controllers/auth.php" method="POST" class="form_register">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="text" id="password" name="password">
            </div>
            <button class="btn" type="submit">Ingresar</button>
            <p>No te haz registrado? Házlo ahora <a href="http://localhost/php-crud-login/views/register.php">Registrate</a></p>
        </form>
    </div>
</main>

<?php include "includes/footer.php"; ?>
