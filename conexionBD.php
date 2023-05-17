<?php
$servername = "localhost";
$database = "Brenning";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($localhost, 'root', '', $Brenning);

$usuario = $_POST["usuario"] ;
$nombre = $_POST["nombre"] ;
$password = $_POST["password"] ;
$correo = $_POST["correo"] ;
$telefono = $_POST["telefono"] ;


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "INSERT INTO cliente(id, usuario, nombre, password, correo, telefono) VALUES ($usuario,$nombre,$password,$correo,$telefono)";
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrarlos
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", usuario: " . $row["usuario"] . ", nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
