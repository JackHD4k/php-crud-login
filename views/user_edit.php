<?php
$con = include '../config/database.php';
$usu_id = $_GET["usu_id"];
$query = $con->prepare("SELECT usu_id, usu_usuario, usu_clave FROM user
WHERE usu_id = ?");
$query->bind_param("i", $usu_id);
$query->execute();
$resultado = $query->get_result();
$usu = $resultado->fetch_assoc();
?>

<?php include "../includes/header.php"; ?>

<h1 class="title">EDITAR USUARIOS</h1>
<body class="container ">
<div class="form_register">
    <form action="actualizar.php" method="POST">
        <div>
            <input type="hidden" name="usu_id" value="<?php echo $usu["usu_id"] ?>">
            <label for="usu_usuario">Nombre del Usuario</label>
            <input value="<?php echo $usu["usu_usuario"] ?>" type="text" name="usu_usuario" id="usu_usuario"/>
        </div>
        <div>
            <label for="usu_clave">Contraseña</label>
            <input value="<?php echo $usu["usu_clave"] ?>" type="text" name="usu_clave" id="usu_clave"/>
        </div>
        <!--        <div>-->
        <!--            <label for="usu_estado">Estado</label>-->
        <!--            <input value="-->
      <?php //echo $usu["usu_estado"] ?><!--" type="text" name="usu_estado" id="usu_estado"/>-->
        <!--        </div>-->
        <!--        <div>-->
        <!--            <label for="emp_nombre_1">Empleado</label>-->
        <!--            <input value="-->
      <?php //echo $usu["emp_nombre_1"] ?><!--" type="text" name="emp_nombre_1" id="emp_nombre_1"/>-->
        <!--        </div>-->
        <!--        <div>-->
        <!--            <label for="rol_nombre">Rol</label>-->
        <!--            <input value="-->
      <?php //echo $usu["rol_nombre"] ?><!--" type="text" name="rol_nombre" id="rol_nombre"/>-->
        <!--        </div>-->
        <div>
            <button type="submit" class="btn">Editar</button>
            <a class="btn btn-warning mx-5" href="user_management.php">Inicio</a>
        </div>
    </form>
</div>
</body>
