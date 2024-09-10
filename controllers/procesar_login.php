<?php
session_start();
include '../includes/db.php'; // Conectar a la base de datos

// Obtener los datos del formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

// Buscar al usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si encontramos el usuario, guardamos los datos en la sesión
    $usuario = $result->fetch_assoc();
    $_SESSION['username'] = $usuario['username']; // Guardamos el nombre de usuario
    $_SESSION['rol'] = $usuario['rol']; // Guardamos el rol del usuario (administrador o usuario)

    // Redirigir según el rol
    if ($usuario['rol'] == 'administrador') {
        // Si el rol es 'administrador', redirigimos al panel de administrador
        header('Location: dashboard_admin.php');
    } else {
        // Si no es administrador, redirigimos a otra página (por ejemplo, perfil de usuario)
        header('Location: usuario.php');
    }
} else {
    // Si el login es incorrecto, redirigimos nuevamente al formulario de login
    header('Location: index.php?error=1');
}
$conn->close();
?>
