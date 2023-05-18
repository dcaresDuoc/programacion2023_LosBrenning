<?php

$usuario = isset($_POST['txt_usuario']) ? $_POST['txt_usuario'] : '';
$nombre = isset($_POST['txt_nombre']) ? $_POST['txt_nombre'] : '';
$correo = isset($_POST['txt_correo']) ? $_POST['txt_correo'] : '';
$contraseña = isset($_POST['txt_contraseña']) ? $_POST['txt_contraseña'] : '';

try{
    
    $conexion = new PDO('
        mysql:host=localhost;
        port=3306;
        dbname=prueba_db',
        'root',
        '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios(usuario,nombre,contraseña) VALUES (?, ?, ?, ?)');
    $pdo->bindParam(1,$usuario);
    $pdo->bindParam(2,$nombre);
    $pdo->bindParam(3,$contraseña);
    $pdo->bindParam(4,$correo);
    $pdo->execute() or die (print($pdo->errorInfo())); 
    
}catch(PDOException $error){
    echo $error -> getMessage();
    die();
} 

