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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$story = $_POST['story'];

// Insertar datos en la base de datos
$sql = "INSERT INTO stories (name, email, phone, story) VALUES ('$name', '$email', '$phone', '$story')";

if ($conn->query($sql) === TRUE) {
    alert "Historia guardada exitosamente.";
} else {
    alert "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
