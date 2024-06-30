<?php

require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inicio_sesion'])) {
    $matricula = $_POST['matricula'];
    $contrasena = $_POST['contrasena'];

    // Validación básica de la matrícula con el dominio específico
    if (strpos($matricula, '@utcancun.edu.mx') === false) {
        echo "<script>alert('Matrícula no válida.');</script>";
    } else {
        // Lógica de validación de usuario (simulado)
        // Aquí deberías consultar la base de datos para verificar las credenciales
        // y manejar la sesión del usuario
        echo "<script>alert('Inicio de sesión exitoso.');</script>";
    }
}
?>
