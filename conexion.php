<?php

$host = getenv("DB_HOST") ?: "localhost";
$usuario = getenv("DB_USER") ?: "root";
$contraseña = getenv("DB_PASS") ?: "";
$bd = getenv("DB_NAME") ?: "lifeacademy_db";

$conn = new mysqli($host, $usuario, $contraseña, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>
