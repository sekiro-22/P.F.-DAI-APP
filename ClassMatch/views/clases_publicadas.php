<?php include('barranav_alumno.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Publicadas - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/alumno.css">
</head>
<body>
    <div class="contenido-principal">
        <h1>Clases Publicadas</h1>

        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Clases Disponibles</button>
        </div>

        <div class="tab-contenido" id="tab-0">
            <ul class="lista">
                <!-- Ejemplo de una clase con capacidad -->
                <li class="lista-item" onclick="mostrarDrawer('Matemáticas', 'Juan Pérez', '2023-12-01', '10:00 AM - 12:00 PM', ['Lunes', 'Miércoles'], 'Secundario', true)">
                    <span>Matemáticas - Juan Pérez</span>
                </li>
                <!-- Ejemplo de una clase llena -->
                <li class="lista-item" onclick="mostrarDrawer('Física', 'Maria Gómez', '2023-11-15', '02:00 PM - 04:00 PM', ['Martes', 'Jueves'], 'Secundario', false)">
                    <span>Física - Maria Gómez (Clase Llena)</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Drawer dinámico para mostrar detalles de las clases -->
    <div id="drawer" class="drawer">
        <h2 id="nombreClase">Nombre de la Clase</h2>
        <p>Docente: <span id="docenteClase"></span></p>
        <p>Fecha de Inicio: <span id="fechaClase"></span></p>
        <p>Horario: <span id="horarioClase"></span></p>
        <p>Días: <span id="diasClase"></span></p>
        <p>Nivel: <span id="nivelClase"></span></p>
        <div id="accionesDrawer" class="acciones">
            <!-- Botones dinámicos según la capacidad -->
        </div>
    </div>

    <script>
        // Función para mostrar detalles de una clase en el drawer
        function mostrarDrawer(materia, docente, fecha, horario, dias, nivel, capacidadDisponible) {
            document.getElementById('nombreClase').innerText = materia;
            document.getElementById('docenteClase').innerText = docente;
            document.getElementById('fechaClase').innerText = fecha;
            document.getElementById('horarioClase').innerText = horario;
            document.getElementById('diasClase').innerText = dias.join(', ');
            document.getElementById('nivelClase').innerText = nivel;

            const accionesDrawer = document.getElementById('accionesDrawer');
            accionesDrawer.innerHTML = '';

            if (capacidadDisponible) {
                accionesDrawer.innerHTML = `
                    <button onclick="enviarSolicitud('${materia}', '${docente}')">Enviar Solicitud</button>
                `;
            } else {
                accionesDrawer.innerHTML = `
                    <p style="color: red; font-weight: bold;">Esta clase está llena y no acepta más alumnos.</p>
                `;
            }

            document.getElementById('drawer').classList.add('activo');
            document.querySelector('.contenido-principal').classList.add('reducido');
        }

        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
            document.querySelector('.contenido-principal').classList.remove('reducido');
        }

        function enviarSolicitud(materia, docente) {
            alert(`Se ha enviado una solicitud para la clase de ${materia} con el docente ${docente}.`);
            cerrarDrawer();
        }
    </script>
</body>
</html>
