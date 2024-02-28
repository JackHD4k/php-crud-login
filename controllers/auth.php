<?php
$con = include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $query = $con->prepare("SELECT usu_id FROM user WHERE usu_usuario = ? AND usu_clave = ? ");
  $query->bind_param('ss', $usuario, $password);
  $query->execute();
  $query->store_result();

  if ($query->num_rows == 1) {
    header("Location: ../views/user_management.php");
  } else {
    $error = "El nombre o la contraseña es incorrecto";
  }

  $query->close();
  $con->close();
}


