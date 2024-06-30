<?php

require_once('./conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $matricula = $_POST['matricula'];
    $contrasena = $_POST['contrasena'];

    // Validación de la matrícula con el dominio específico
    if (strpos($matricula, '@utcancun.edu.mx') === false) {
        echo "<script>alert('Debes usar una matrícula válida de la UTCancún.');</script>";
    } else {
        // Lógica para enviar correo de verificación (simulado)
        $correo_verificacion = "Enviar correo de verificación a $matricula";

        // Aquí deberías implementar el envío real de correo

        // Simulación de registro en la base de datos
        // En un entorno real, usarías consultas preparadas para mayor seguridad
        // y evitarías almacenar contraseñas en texto plano
        echo "<script>alert('Registro exitoso. $correo_verificacion');</script>";
    }
}
?>
