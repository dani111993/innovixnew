<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Ropa</title>
</head>
<body>
    <h2>Agregar Ropa</h2>

    <form action="procesar_agregar_ropa.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label for="categoria">Categoría:</label>
        <select name="categoria" required>
            <option value="1">Mujer</option>
            <option value="2">Hombre</option>
            <option value="3">Niño</option>
        </select><br>

        <input type="submit" value="Agregar Ropa" name="agregar_ropa">
    </form>
</body>

<?php
// Verifica si se ha enviado el formulario
if (isset($_POST['agregar_ropa'])) {
    // Conecta con la base de datos (asegúrate de tener las credenciales correctas)
    $conexion = new mysqli("localhost", "usuario", "contrasena", "nombre_de_tu_base_de_datos");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtiene los datos del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria_id = $_POST['categoria'];

    // Prepara la consulta SQL
    $insertar = $conexion->prepare("INSERT INTO Ropa (nombre, precio, categoria_id) VALUES (?, ?, ?)");
    $insertar->bind_param("sdi", $nombre, $precio, $categoria_id);

    // Ejecuta la consulta
    if ($insertar->execute()) {
        echo "Ropa agregada exitosamente.";
    } else {
        echo "Error al agregar ropa: " . $insertar->error;
    }

    // Cierra la conexión y la consulta preparada
    $insertar->close();
    $conexion->close();
}
?>

</html>
