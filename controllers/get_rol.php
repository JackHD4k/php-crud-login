<?php
$con = include '../config/database.php';
$query = $con->query("SELECT rol_id, rol_nombre FROM rol");
$get_rol = $query->fetch_all(MYSQLI_ASSOC);
return $get_rol;