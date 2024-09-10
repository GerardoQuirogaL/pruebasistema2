<?php
include '../includes/db.php'; // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $proveedor = $_POST['proveedor'];
    $hora_fecha = $_POST['hora_fecha'];
    $dias_semana = $_POST['dias_semana'];
    $placas_vehiculo = $_POST['placas_vehiculo'];
    $modelo_marca = $_POST['modelo_marca'];
    $color_vehiculo = $_POST['color_vehiculo'];

    // Insertar proveedor en la base de datos
    $sql = "INSERT INTO proveedores (nombre_completo, proveedor, hora_fecha, dias_semana, placas_vehiculo, modelo_marca, color_vehiculo) 
            VALUES ('$nombre_completo', '$proveedor', '$hora_fecha', '$dias_semana', '$placas_vehiculo', '$modelo_marca', '$color_vehiculo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Proveedor registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

