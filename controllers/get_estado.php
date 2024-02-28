<?php
$con = include_once '../config/database.php';
$query = $con->query("SELECT emp_id, emp_nombre_1 from employed");
$get_emp = $query->fetch_all(MYSQLI_ASSOC);
return $get_emp;