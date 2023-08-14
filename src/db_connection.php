<?php
$servername = "localhost"; // Puedes cambiarlo si tu servidor de base de datos está en otro host
$username = "root"; // Reemplaza con el nombre de usuario de tu base de datos
$password = "Generacion12"; // Reemplaza con la contraseña de tu base de datos
$dbname = "testTotto"; // Reemplaza con el nombre de tu base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>