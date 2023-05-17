if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar las credenciales en la base de datos
    if ($username === 'usuario' && $password === 'contraseña') {
        // Credenciales válidas, establecer la sesión
        $_SESSION['username'] = $username;

        exit();
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        $error_message = 'Credenciales inválidas, por favor intenta nuevamente.';
    }
}