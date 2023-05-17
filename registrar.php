<?php

$usuario = isset($_POST['txt_usuario']) ? $_POST['txt_usuario'] : '';
$nombre = isset($_POST['txt_nombre']) ? $_POST['txt_nombre'] : '';
$contraseña = isset($_POST['txt_contraseña']) ? $_POST['txt_contraseña'] : '';
try{
    
    $conexion new PDO('
        mysql:host=localhost;
        port=3306;
        dbname=prueba1_db',
        'root',
        '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_WARNING);

    
    echo json_encode('usuario')
    echo json_encode('nombre')
    echo json_encode('contraseña')
    
}catch(PDOException $error){
    echo $error -> getMessage();
    die();
} 

