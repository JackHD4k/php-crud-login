<?php
$con = include '../config/database.php';
$id = $_POST["usu_id"];
$usu_usuario = $_POST["usu_usuario"];
$usu_clave = $_POST["usu_clave"];

$query = $con->prepare("UPDATE user SET usu_usuario = ?, usu_clave = ? WHERE usu_id = ?");
$query->bind_param("ssi", $usu_usuario, $usu_clave, $id);
$query->execute();
header("Location: user_management.php");