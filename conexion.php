<?php
$host = "shuttle.proxy.rlwy.net";
$port = 14636;
$user = "root";
$pass = "ctWaMGrsHHFspPZIxHWaiUzpnrUqMfev";
$db   = "railway";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully"; // (opcional para probar)
?>
