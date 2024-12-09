<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - ClassMatch</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/ClassMatch/css/login.css">
</head>
<body>
    <!-- Panel fijo (Drawer) con el formulario dentro -->
    <div class="menu-derecha">
        <div class="background-content"></div>

        <h1>ClassMatch</h1>
        <form action="/ClassMatch/actions/procesar_login.php" method="POST">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            <br>
            <button type="submit" class="btn-primario">Iniciar Sesión</button>
        </form>
            <br>
        <div class="registro">
            <p>¿No tienes una cuenta? <a href="/ClassMatch/views/login_registro.php">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
