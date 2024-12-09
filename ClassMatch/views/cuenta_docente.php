<?php include('barranav_docente.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Docente - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/docentes.css">
</head>

<body>
    <div class="contenido-principal">
        <h1>Cuenta Docente</h1>

        <!-- Tabs para separar Datos de la Cuenta y Sobre ClassMatch -->
        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Datos de la Cuenta</button>
            <button class="tab" onclick="mostrarTab(1)">Sobre ClassMatch</button>
        </div>

        <!-- Contenido del Tab 0: Datos de la Cuenta -->
        <div class="tab-contenido" id="tab-0">
            <ul class="lista">
                <li class="lista-item" onclick="abrirDrawerDatosCuenta()">
                    <span>Ver Mis Datos</span>
                </li>
                <li class="lista-item" onclick="abrirDrawerEditarDatos()">
                    <span>Editar Mis Datos</span>
                </li>
                <li class="lista-item" onclick="eliminarCuenta()">
                    <span>Eliminar Mi Cuenta</span>
                </li>
                <li class="lista-item" onclick="cerrarSesion()">
                    <span>Cerrar Sesión</span>
                </li>
            </ul>
        </div>

        <!-- Contenido del Tab 1: Sobre ClassMatch -->
        <div class="tab-contenido" id="tab-1" style="display: none;">
            <ul class="lista">
                <li class="lista-item" onclick="abrirDrawerSobreClassMatch()">
                    <span>Sobre ClassMatch</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Drawer dinámico para mostrar los datos y sobre ClassMatch -->
    <div id="drawer" class="drawer">
        <!-- Datos de la Cuenta -->
        <div id="drawerDatosCuenta" class="drawer-contenido">
            <h2>Datos de la Cuenta</h2>
            <p><strong>Nombre:</strong> Juan Pérez</p>
            <p><strong>Correo:</strong> juan.perez@example.com</p>
            <p><strong>Profesor de:</strong> Matemáticas</p>
            <div class="acciones">
                <button onclick="cerrarDrawer()">Cerrar</button>
            </div>
        </div>

        <!-- Editar Datos de la Cuenta -->
        <div id="drawerEditarCuenta" class="drawer-contenido" style="display: none;">
            <h2>Editar Datos</h2>
            <form id="editarCuentaForm">
                <label for="nuevoNombre">Nombre:</label>
                <input type="text" id="nuevoNombre" placeholder="Nuevo nombre" required>
                <label for="nuevoCorreo">Correo:</label>
                <input type="email" id="nuevoCorreo" placeholder="Nuevo correo" required>
                <div class="acciones">
                    <button type="submit" class="btn-primario">Guardar Cambios</button>
                    <button type="button" class="btn-secundario" onclick="cerrarDrawer()">Cancelar</button>
                </div>
            </form>
        </div>

        <!-- Sobre ClassMatch -->
        <div id="drawerSobreClassMatch" class="drawer-contenido" style="display: none;">
            <h2>Sobre ClassMatch</h2>
            <p>ClassMatch es una página con el objetivo de facilitar el proceso de encontrar docentes particulares para los alumnos que necesitan un apoyo educativo desde su creación en Enero del 2024.</p>
            <p>En ClassMatch nos limitamos a informar sobre los docentes particulares que trabajan en Río Gallegos. La asignación de trabajo y material de teoría se encarga cada docente de forma privada o grupal con cada alumno.</p>
            <p>Si tiene alguna duda contáctanos!!</p>
            <p><strong>Teléfono:</strong> +54 9 2966 57-1239</p>
            <p><strong>Instagram:</strong> ClassMatch2024</p>
            <div class="acciones">
                <button onclick="cerrarDrawer()">Cerrar</button>
            </div>
        </div>

        <!-- Cerrar Sesión -->
        <div id="cerrarSesion" class="drawer-contenido" style="display: none;">
            <h2>¿Estás seguro de que deseas cerrar sesión?</h2>
            <div class="acciones">
                <button onclick="confirmarCerrarSesion()">Sí, cerrar sesión</button>
                <button onclick="cerrarDrawer()">Cancelar</button>
            </div>
        </div>
    </div>

    <script>
        // Mostrar fecha actual
        document.getElementById('fechaActual').innerText = new Date().toLocaleDateString();

        // Función para mostrar el contenido del tab seleccionado
        function mostrarTab(tabIndex) {
            document.querySelectorAll('.tab-contenido').forEach((tab, index) => {
                tab.style.display = index === tabIndex ? 'block' : 'none';
            });
        }

        // Función para abrir el drawer con los datos de la cuenta
        function abrirDrawerDatosCuenta() {
            document.getElementById('drawerDatosCuenta').style.display = 'block';
            document.getElementById('drawerEditarCuenta').style.display = 'none';
            document.getElementById('drawerSobreClassMatch').style.display = 'none';
            document.getElementById('cerrarSesion').style.display = 'none';
            document.getElementById('drawer').classList.add('activo');
        }

        // Función para abrir el drawer con los datos de editar cuenta
        function abrirDrawerEditarDatos() {
            document.getElementById('drawerEditarCuenta').style.display = 'block';
            document.getElementById('drawerDatosCuenta').style.display = 'none';
            document.getElementById('drawerSobreClassMatch').style.display = 'none';
            document.getElementById('cerrarSesion').style.display = 'none';
            document.getElementById('drawer').classList.add('activo');
        }

        // Función para abrir el drawer con la información sobre ClassMatch
        function abrirDrawerSobreClassMatch() {
            document.getElementById('drawerSobreClassMatch').style.display = 'block';
            document.getElementById('drawerEditarCuenta').style.display = 'none';
            document.getElementById('drawerDatosCuenta').style.display = 'none';
            document.getElementById('cerrarSesion').style.display = 'none';
            document.getElementById('drawer').classList.add('activo');
        }

        // Función para abrir el drawer con la opción de Cerrar Sesión
        function cerrarSesion() {
            document.getElementById('cerrarSesion').style.display = 'block';
            document.getElementById('drawerDatosCuenta').style.display = 'none';
            document.getElementById('drawerEditarCuenta').style.display = 'none';
            document.getElementById('drawerSobreClassMatch').style.display = 'none';
            document.getElementById('drawer').classList.add('activo');
        }

        // Función para cerrar el drawer
        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
        }

        // Función para eliminar la cuenta
        function eliminarCuenta() {
            const confirmar = confirm("¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.");
            if (confirmar) {
                alert("Tu cuenta ha sido eliminada.");
            }
        }

        // Función para guardar los cambios en la cuenta (para editar datos)
        document.getElementById('editarCuentaForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const nuevoNombre = document.getElementById('nuevoNombre').value;
            const nuevoCorreo = document.getElementById('nuevoCorreo').value;

            alert(`Datos actualizados: Nombre - ${nuevoNombre}, Correo - ${nuevoCorreo}`);
            cerrarDrawer();
        });

        // Función para confirmar el cierre de sesión
        function confirmarCerrarSesion() {
            alert("Has cerrado sesión correctamente.");
            // Aquí deberías agregar la lógica de cierre de sesión real.
            cerrarDrawer();
        }
    </script>
</body>

</html>
