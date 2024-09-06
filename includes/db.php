<?php
// Conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vehiculos_db';

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
