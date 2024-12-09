<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassMatch - Navegación Docente</title>
    <link rel="stylesheet" href="/ClassMatch/css/docentes.css">
</head>

<body>
    <!-- Barra de Navegación Docente -->
    <div class="barranav-docente">
        <div class="logo">
            <h1>ClassMatch</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/ClassMatch/views/lista_clases.php">Lista de Clases</a></li>
                <li><a href="/ClassMatch/views/lista_alumnos.php">Lista de Alumnos</a></li>
                <li><a href="/ClassMatch/views/cuenta_docente.php">Cuenta Docente</a></li>
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