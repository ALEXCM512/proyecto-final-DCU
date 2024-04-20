<?php

$dsn = 'mysql:host=sql301.infinityfree.com;dbname=if0_36299481_proyecto_final';
$usuario = 'if0_36299481';
$contraseña = 'aKuMj0xLZTqo';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>