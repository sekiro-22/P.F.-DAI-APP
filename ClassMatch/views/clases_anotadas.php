<?php include('barranav_alumno.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Anotadas - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/alumnos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenido-principal">
        <h1>Clases Anotadas</h1>

        <!-- Tabs para separar Clases Activas y Historial -->
        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Clases Activas</button>
            <button class="tab" onclick="mostrarTab(1)">Historial</button>
        </div>

        <!-- Contenido del Tab 0: Clases Activas -->
        <div class="tab-contenido" id="tab-0">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarDrawer('Matemáticas', 'Juan Pérez', '2023-12-01', '10:00 AM - 12:00 PM', ['Lunes', 'Miércoles'], '$1000')">
                    <span>Matemáticas - Juan Pérez</span>
                </li>
                <li class="lista-item" onclick="mostrarDrawer('Física', 'Maria Gómez', '2023-11-15', '02:00 PM - 04:00 PM', ['Martes', 'Jueves'], '$800')">
                    <span>Física - Maria Gómez</span>
                </li>
            </ul>
        </div>

        <!-- Contenido del Tab 1: Historial -->
        <div class="tab-contenido" id="tab-1" style="display: none;">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarDrawer('Química', 'Lucas Fernández', '2023-09-20', '10:00 AM - 12:00 PM', ['Viernes'], '$700')">
                    <span>Química - Lucas Fernández</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Drawer dinámico para mostrar detalles de la clase -->
    <div id="drawer" class="drawer">
        <h2 id="materiaClase">Clase</h2>
        <p>Profesor: <span id="profesorClase"></span></p>
        <p>Fecha de Inscripción: <span id="fechaClase"></span></p>
        <p>Horario: <span id="horarioClase"></span></p>
        <p>Días: <span id="diasClase"></span></p>
        <p>Precio: <span id="precioClase"></span></p>
        <div class="acciones">
            <button onclick="cerrarDrawer()">Cerrar</button>
        </div>
    </div>

    <script>
        function mostrarTab(tabIndex) {
            document.querySelectorAll('.tab-contenido').forEach((tab, index) => {
                tab.style.display = index === tabIndex ? 'block' : 'none';
            });
        }

        function mostrarDrawer(materia, profesor, fecha, horario, dias, precio) {
            document.getElementById('materiaClase').innerText = materia;
            document.getElementById('profesorClase').innerText = profesor;
            document.getElementById('fechaClase').innerText = fecha;
            document.getElementById('horarioClase').innerText = horario;
            document.getElementById('diasClase').innerText = dias.join(', ');
            document.getElementById('precioClase').innerText = precio;

            document.getElementById('drawer').classList.add('activo');
            document.querySelector('.contenido-principal').classList.add('reducido');
        }

        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
            document.querySelector('.contenido-principal').classList.remove('reducido');
        }
    </script>
</body>
</html>
