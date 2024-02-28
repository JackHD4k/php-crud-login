<?php include "../includes/header.php"; ?>

<h1 class="title">LISTA DE USUARIOS</h1>
<div class="col-8">
    <table class="tabla_usuarios">
        <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th>Empleado</th>
            <th>Rol</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../controllers/get_usuarios.php';
        foreach ($get_user as $item) {
        ?>
        <tr>
            <td><?= $item['usu_id'] ?></td>
            <td><?= $item['usu_usuario'] ?></td>
            <td><?= $item['usu_clave'] ?></td>
            <td><?= $item['usu_estado'] ?></td>
            <td><?= $item['emp_nombre_1'] ?></td>
            <td><?= $item['rol_nombre'] ?></td>
            <td><a href="user_edit.php?usu_id=<?= $item["usu_id"] ?>">Editar</a></td>
            <td><a href="eliminar.php?usu_id=<?= $item["usu_id"] ?>">Eliminar</a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <a class="btn" href="http://localhost/php-crud-login/views/register.php">Registrar nuevos usuarios</a>
</div>