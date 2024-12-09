<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Panel fijo (Drawer) con el formulario dentro -->
    <div class="menu-derecha">
        <div class="background-content"></div>

        <h1>ClassMatch</h1>
        <form action="/ClassMatch/actions/procesar_registro.php" method="POST">
            <!-- Fila 1: Nombre y Apellido -->
            <div class="fila">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <br>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                </div>
            </div>

            <!-- Fila 2: Correo -->
            <div class="fila solo">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>

            <!-- Fila 3: Contraseña y Confirmar Contraseña -->
            <div class="fila">
                <div class="campo">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
            </div>
                <br>
            <!-- Botón Siguiente -->
            <button type="submit" class="btn-primario">Siguiente</button>
        </form>

        <div class="registro">
            <p>¿Ya tienes cuenta? <a href="/ClassMatch/views/login_iniciar.php">Inicia sesión</a></p>
        </div>
    </div>
</body>
</html>
