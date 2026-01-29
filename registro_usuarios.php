<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptación segura

    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar: " . $stmt->error;
    }
}
?>

<h2>Registrar Usuario</h2>
<form method="POST">
    Usuario: <input type="text" name="username" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Registrar">
</form>
