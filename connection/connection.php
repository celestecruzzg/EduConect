<?php

$server = "localhost";
$user = "celeste";
$password = "123";
$db = "educonnect";

$conexion = new mysqli($server, $user, $password, $db);

if ($conexion->connect_errno) {
    die("Conexion Fallida" . $conexion->connect_errno);
} else {
    echo "Conectado";
}

?>