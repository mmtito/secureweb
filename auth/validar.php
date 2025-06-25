<?php
session_start();
require_once("../db/conn.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $conexion->real_escape_string($_POST['usuario']);
    $password = $_POST['password'];

    // Consulta para obtener el usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
    $result = $conexion->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verificar contraseña con SHA2
        $password_hash = hash("sha256", $password);

        if ($password_hash === $row['password']) {
            // Guardar info en sesión
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['rol'] = $row['rol'];

            // Redirigir según rol
            if ($row['rol'] === 'admin') {
                header("Location: ../administrador/admin.php");
                exit();
            } elseif ($row['rol'] === 'cliente') {
                header("Location: ../cliente/cliente.php");
                exit();
            } else {
                echo "Rol no válido.";
            }
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>
