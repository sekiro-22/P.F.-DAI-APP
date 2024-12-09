<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassMatch - Navegación Alumno</title>
    <link rel="stylesheet" href="/ClassMatch/css/docentes.css">
</head>

<body>
    <!-- Barra de Navegación Alumno -->
    <div class="barranav-alumno">
        <div class="logo">
            <h1>ClassMatch</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/ClassMatch/views/clases_anotadas.php">Clases Anotadas</a></li>
                <li><a href="/ClassMatch/views/clases_publicadas.php">Clases Publicadas</a></li>
                <li><a href="/ClassMatch/views/cuenta_alumno.php">Cuenta Alumno</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenido Principal -->
    <div class="contenido-principal">
        <!-- Aquí se incluye el contenido dinámico -->
        <div id="content"></div>
    </div>

    <script>
        // Función de Cerrar Sesión
        function cerrarSesion() {
            const confirmar = confirm("¿Estás seguro de que deseas cerrar sesión?");
            if (confirmar) {
                alert("Has cerrado sesión correctamente.");
                // Lógica de cierre de sesión real (puede ser redirigir al login o eliminar sesión)
            }
        }
    </script>
</body>

</html>
