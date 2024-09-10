<?php
include '../includes/db.php'; // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $area_asistencia = $_POST['area_asistencia'];
    $hora_fecha = $_POST['hora_fecha'];
    $placas_vehiculo = $_POST['placas_vehiculo'];
    $modelo_marca = $_POST['modelo_marca'];
    $color_vehiculo = $_POST['color_vehiculo'];

    // Insertar invitado en la base de datos
    $sql = "INSERT INTO invitados (nombre_completo, area_asistencia, hora_fecha, placas_vehiculo, modelo_marca, color_vehiculo) 
            VALUES ('$nombre_completo', '$area_asistencia', '$hora_fecha', '$placas_vehiculo', '$modelo_marca', '$color_vehiculo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Invitado registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
