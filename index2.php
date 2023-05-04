<?php
// Conectar a la base de datos
$host = "localhost";
$usuario = "usuario";
$contrasena = "contrasena";
$base_de_datos = "base_de_datos";
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$conexion) {
	die("