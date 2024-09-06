<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'administrador') {
    header('Location: index.php'); // Redirigir al login si no es administrador
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Panel de Control - Administrador</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Panel de Control - Administrador</h1>
        <p>Bienvenido, <?php echo $_SESSION['username']; ?>!</p>

        <!-- Opciones para registrar empleados, visitantes y proveedores -->
        <div class="row">
            <!-- Formulario para Empleados -->
            <div class="col-md-4">
                <h3>Registrar Empleado</h3>
                <form action="controllers/registrar_empleado.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_completo" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_colaborador">Número de Colaborador</label>
                        <input type="text" class="form-control" name="numero_colaborador" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" class="form-control" name="area" required>
                    </div>
                    <div class="form-group">
                        <label for="placas_vehiculo">Placas del Vehículo</label>
                        <input type="text" class="form-control" name="placas_vehiculo" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo_marca">Modelo y Marca del Vehículo</label>
                        <input type="text" class="form-control" name="modelo_marca" required>
                    </div>
                    <div class="form-group">
                        <label for="color_vehiculo">Color del Vehículo</label>
                        <input type="text" class="form-control" name="color_vehiculo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Empleado</button>
                </form>
            </div>

            <!-- Formulario para Visitantes -->
            <div class="col-md-4">
                <h3>Registrar Visitante</h3>
                <form action="controllers/registrar_invitado.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_completo" required>
                    </div>
                    <div class="form-group">
                        <label for="area_asistencia">Área a la que Asiste</label>
                        <input type="text" class="form-control" name="area_asistencia" required>
                    </div>
                    <div class="form-group">
                        <label for="hora_fecha">Hora y Fecha</label>
                        <input type="datetime-local" class="form-control" name="hora_fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="placas_vehiculo">Placas del Vehículo</label>
                        <input type="text" class="form-control" name="placas_vehiculo" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo_marca">Modelo y Marca del Vehículo</label>
                        <input type="text" class="form-control" name="modelo_marca" required>
                    </div>
                    <div class="form-group">
                        <label for="color_vehiculo">Color del Vehículo</label>
                        <input type="text" class="form-control" name="color_vehiculo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Visitante</button>
                </form>
            </div>

            <!-- Formulario para Proveedores -->
            <div class="col-md-4">
                <h3>Registrar Proveedor</h3>
                <form action="controllers/registrar_proveedor.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre_completo" required>
                    </div>
                    <div class="form-group">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" class="form-control" name="proveedor" required>
                    </div>
                    <div class="form-group">
                        <label for="hora_fecha">Hora y Fecha</label>
                        <input type="datetime-local" class="form-control" name="hora_fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="dias_semana">Días que ingresa en la semana</label>
                        <input type="text" class="form-control" name="dias_semana" required>
                    </div>
                    <div class="form-group">
                        <label for="placas_vehiculo">Placas del Vehículo</label>
                        <input type="text" class="form-control" name="placas_vehiculo" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo_marca">Modelo y Marca del Vehículo</label>
                        <input type="text" class="form-control" name="modelo_marca" required>
                    </div>
                    <div class="form-group">
                        <label for="color_vehiculo">Color del Vehículo</label>
                        <input type="text" class="form-control" name="color_vehiculo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Proveedor</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
