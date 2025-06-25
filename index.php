<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SecureWeb - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form method="POST" action="auth/validar.php" class="card shadow p-4" style="width: 25rem;">
        <h4 class="text-center mb-4">Login</h4>
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required placeholder="usuario" />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required placeholder="Digite su contraseña" />
        </div>
        <div>
            <input type="submit" value="Ingresar" class="btn btn-success w-100" />
        </div>
    </form>
</body>
</html>
