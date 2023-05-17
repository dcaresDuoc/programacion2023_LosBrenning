<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["txt_usuario"];
    $nombre = $_POST["txt_nombre"];
    $contraseña = $_POST["txt_contraseña"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = ""; // Si has establecido una contraseña en XAMPP, debes ingresarla aquí
    $dbname = "formulario_registro_db"; // Reemplaza "nombre_de_la_base_de_datos" con el nombre real de tu base de datos

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar los datos en la tabla
    $sql = "INSERT INTO usuarios (usuario, nombre, contraseña) VALUES ('$usuario', '$nombre', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
