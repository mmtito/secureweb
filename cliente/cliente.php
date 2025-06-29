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
    <title><?php echo htmlspecialchars($_SESSION['usuario']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar bg-primary border-bottom border-body" data-bs-theme="dark">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false"><?php echo htmlspecialchars($_SESSION['usuario']); ?></a>
                <ul class="dropdown-menu">
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../auth/logout.php">Cerrar session</a></li>
        </ul>
        </li>
        </ul>
    </nav>

    <h1>Bienvenido <?php echo htmlspecialchars($_SESSION['nombre']);
    ?>:
        <?php echo htmlspecialchars($_SESSION['usuario']);
        ?>
    </h1>
    <div class="card-group">
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/secureweb/cliente/aut.jpeg" class="card-img-top" alt="/secureweb/cliente/aut.jpeg">
            <div class="card-body">
                <h5 class="card-title">Producto #</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>