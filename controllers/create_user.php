<?php
$con = include '../config/database.php';
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$estado = $_POST['estado'];
$emp = $_POST['emp'];
$rol = $_POST['rol'];
$query = $con->prepare('INSERT INTO user (usu_usuario, usu_clave, usu_estado, usu_emp_id, usu_rol_id)
VALUES (?, ?, ?, ?, ?)');
$query->bind_param('ssiii', $usuario, $password, $estado, $emp, $rol);
$query->execute();
header("Location: ../index.php");