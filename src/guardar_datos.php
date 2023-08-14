<?php
// guardar_datos.php
include 'db_connection.php'; // Incluye el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos si el campo 'email' está definido en $_POST
    if (isset($_POST['email'])) {
        // Recuperamos el valor del campo 'email'
        $email = $_POST['email'];

        // Preparamos la consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO tabla_datos (email) VALUES (:email)";
        $stmt = $pdo->prepare($sql);

        // Ejecutamos la consulta con el valor del campo 'email'
        $stmt->execute([':email' => $email]);

        // Redireccionamos a una página de éxito o mostramos un mensaje de éxito
        header('Location: registro_exitoso.php');
        exit();
    } else {
        echo "Error: El campo 'email' no está definido en el formulario.";
        exit();
    }
}
?>