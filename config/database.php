<?php
$host = "127.0.0.1";
$port = 3306;
$user = "root";
$password = "";
$dbname = "employees_db";

$con = new mysqli($host, $user, $password, $dbname, $port)
or die("ERROR AL CONECTAR CON LA BASE DE DATOS". mysqli_connect_error());

return $con;