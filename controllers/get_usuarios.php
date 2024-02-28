<?php
$con = include_once '../config/database.php';
$query = $con->query("SELECT usu_id, usu_clave, usu_usuario, usu_estado, emp_nombre_1, rol_nombre FROM user
INNER JOIN employed ON user.usu_emp_id = employed.emp_id
INNER JOIN rol ON user.usu_rol_id = rol.rol_id;");
$get_user = $query->fetch_all(MYSQLI_ASSOC);
return $get_user;