<?php
include '../includes/db.php'; // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $numero_colaborador = $_POST['numero_colaborador'];
    $area = $_POST['area'];
    $placas_vehiculo = $_POST['placas_vehiculo'];
    $modelo_marca = $_POST['modelo_marca'];
    $color_vehiculo = $_POST['color_vehiculo'];

    // Insertar empleado en la base de datos
    $sql = "INSERT INTO empleados (nombre_completo, numero_colaborador, area, placas_vehiculo, modelo_marca, color_vehiculo) 
            VALUES ('$nombre_completo', '$numero_colaborador', '$area', '$placas_vehiculo', '$modelo_marca', '$color_vehiculo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Empleado registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
