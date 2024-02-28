<?php
$con = include '../config/database.php';
$id = $_GET["usu_id"];
$query = $con->prepare("DELETE FROM user WHERE usu_id = ?");
$query->bind_param("i", $id);
$query->execute();
header("Location: user_management.php");