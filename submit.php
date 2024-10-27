<?php
$servername = "localhost"; // Cambia esto si es necesario
$username = "root";          // Cambia esto si usas otra cuenta
$password = "";              // Cambia esto si tienes una contraseña
$dbname = "backbone"; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$historia = $_POST['historia'];

// Insertar datos en la base de datos
$sql = "INSERT INTO historias (nombre, email, telefono, historia) VALUES ('$nombre', '$email', '$telefono', '$historia')";

if ($conn->query($sql) === TRUE) {
    echo "Historia guardada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
