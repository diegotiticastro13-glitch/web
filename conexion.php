<?php
$host = "localhost"; // A veces el hosting te da una IP o nombre distinto
$user = "Dcastro130731"; // Usuario creado en el panel del hosting
$pass = "Pompillas@20082"; // Contraseña de la base de datos
$db = "login_bd"; // Nombre de la BD en el hosting

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

