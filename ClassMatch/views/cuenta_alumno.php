<?php include('barranav_alumno.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Alumno - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/alumno.css">
</head>
<body>
    <div class="contenido-principal">
        <h1>Cuenta Alumno</h1>

        <!-- Tabs para separar Datos de la Cuenta, Sobre ClassMatch y Notificaciones -->
        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Datos de la Cuenta</button>
            <button class="tab" onclick="mostrarTab(1)">Sobre ClassMatch</button>
            <button class="tab" onclick="mostrarTab(2)">Notificaciones</button>
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

        <!-- Contenido del Tab 2: Notificaciones -->
        <div class="tab-contenido" id="tab-2" style="display: none;">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarNotificacion('Aceptado', 'Juan Pérez', 'Matemáticas', '2023-12-01', 'juan@example.com', '+54 2966 123456')">
                    <span>Matemáticas - Juan Pérez (Aceptado)</span>
                </li>
                <li class="lista-item" onclick="mostrarNotificacion('Rechazado', 'Maria Gómez', 'Física', '2023-11-15')">
                    <span>Física - Maria Gómez (Rechazado)</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Drawer dinámico -->
    <div id="drawer" class="drawer">
        <!-- Datos de la Cuenta -->
        <div id="drawerDatosCuenta" class="drawer-contenido">
            <h2>Datos de la Cuenta</h2>
            <p><strong>Nombre:</strong> Lucas Fernández</p>
            <p><strong>Correo:</strong> lucas.fernandez@example.com</p>
            <p><strong>Alumno de:</strong> Secundario</p>
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

        <!-- Notificaciones -->
        <div id="drawerNotificacion" class="drawer-contenido" style="display: none;">
            <h2 id="estadoNotificacion"></h2>
            <p><strong>Docente:</strong> <span id="docenteNotificacion"></span></p>
            <p><strong>Materia:</strong> <span id="materiaNotificacion"></span></p>
            <p><strong>Fecha:</strong> <span id="fechaNotificacion"></span></p>
            <p id="contactoNotificacion" style="display: none;">
                <strong>Correo del Docente:</strong> <span id="correoNotificacion"></span><br>
                <strong>Teléfono:</strong> <span id="telefonoNotificacion"></span>
            </p>
            <div class="acciones">
                <button onclick="cerrarDrawer()">Cerrar</button>
            </div>
        </div>
    </div>

    <script>
        function mostrarTab(tabIndex) {
            document.querySelectorAll('.tab-contenido').forEach((tab, index) => {
                tab.style.display = index === tabIndex ? 'block' : 'none';
            });
        }

        function abrirDrawerDatosCuenta() {
            mostrarDrawerContenido('drawerDatosCuenta');
        }

        function abrirDrawerEditarDatos() {
            mostrarDrawerContenido('drawerEditarCuenta');
        }

        function abrirDrawerSobreClassMatch() {
            mostrarDrawerContenido('drawerSobreClassMatch');
        }

        function mostrarNotificacion(estado, docente, materia, fecha, correo = '', telefono = '') {
            document.getElementById('estadoNotificacion').innerText = estado === 'Aceptado' ? '¡Solicitud Aceptada!' : 'Solicitud Rechazada';
            document.getElementById('docenteNotificacion').innerText = docente;
            document.getElementById('materiaNotificacion').innerText = materia;
            document.getElementById('fechaNotificacion').innerText = fecha;

            if (estado === 'Aceptado') {
                document.getElementById('contactoNotificacion').style.display = 'block';
                document.getElementById('correoNotificacion').innerText = correo;
                document.getElementById('telefonoNotificacion').innerText = telefono;
            } else {
                document.getElementById('contactoNotificacion').style.display = 'none';
            }

            mostrarDrawerContenido('drawerNotificacion');
        }

        function mostrarDrawerContenido(id) {
            document.querySelectorAll('.drawer-contenido').forEach(drawer => {
                drawer.style.display = drawer.id === id ? 'block' : 'none';
            });
            document.getElementById('drawer').classList.add('activo');
        }

        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
        }

        function eliminarCuenta() {
            if (confirm("¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.")) {
                alert("Tu cuenta ha sido eliminada.");
            }
        }

        function cerrarSesion() {
            alert("Has cerrado sesión correctamente.");
        }

        document.getElementById('editarCuentaForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const nuevoNombre = document.getElementById('nuevoNombre').value;
            const nuevoCorreo = document.getElementById('nuevoCorreo').value;

            alert(`Datos actualizados: Nombre - ${nuevoNombre}, Correo - ${nuevoCorreo}`);
            cerrarDrawer();
        });
    </script>
</body>
</html>
