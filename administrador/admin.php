<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Panel Administrador</title>
</head>
<body>
    <h1>Bienvenido Admin: <?php echo htmlspecialchars($_SESSION['usuario']); ?></h1>
    <p>Esta es la vista del administrador.</p>
    <a href="../auth/logout.php">Cerrar sesión</a>
</body>
</html>
