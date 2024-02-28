<?php include "../includes/header.php"; ?>

<h1 class="title">REGISTRO DE USUARIOS</h1>
<div class="container_register">
    <form action="../controllers/create_user.php" method="POST" class="form_register">
        <div class="input-group">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="estado">Estado</label>
            <select id="estado" name="estado">
                <option value="">-- Seleccione --</option>
                <option value="1">Activo</option>
                <option value="2">No Activo</option>
            </select>
        </div>
        <div>
            <label for="emp">Empleado</label>
            <select id="emp" name="emp">
              <?php
              include '../controllers/get_empleados.php';
              foreach ($get_emp as $emp) {
                ?>
                  <option value="<?= $emp['emp_id']; ?>"><?= $emp['emp_nombre_1']; ?></option>
              <?php } ?>
            </select>
        </div>
        <div>
            <label for="rol">Rol</label>
            <select id="rol" name="rol">
              <?php
              include '../controllers/get_rol.php';
              foreach ($get_rol as $rol) {
                ?>
                  <option value="<?= $rol['rol_id']; ?>"> <?= $rol['rol_nombre']; ?> </option>
                <?php
              }
              ?>
            </select>
        </div>
        <button class="btn" type="submit">Registrar</button>
        <p>Volver a la página de inicio haciendo click <a href="/php-crud-login/index.php">Aquí</a></p>
    </form>
</div>