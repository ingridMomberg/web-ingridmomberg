<?php
// Conectar a la base de datos
$servername = "localhost:3306";
$username = "root"; 
$password = "";
$dbname = "bdd_contacto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";

// Usar prepared statements para evitar inyecciones SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $mensaje);

// Ejecutar y verificar si se insertó correctamente
if ($stmt->execute()) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>