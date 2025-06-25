<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'cliente') {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Panel Cliente</title>
</head>
<body>
    <h1>Bienvenido <?php echo htmlspecialchars($_SESSION['nombre']); 
        ?>: 
        <?php echo htmlspecialchars($_SESSION['usuario']); 
        ?>
    </h1>
    <p>Esta es la vista del cliente.</p>
    <a href="../auth/logout.php">Cerrar sesión</a>
</body>
</html>
