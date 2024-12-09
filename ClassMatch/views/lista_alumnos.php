<?php include('barranav_docente.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/docentes.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenido-principal">
        <h1>Lista de Alumnos</h1>

        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Alumnos Activos</button>
            <button class="tab" onclick="mostrarTab(1)">Solicitudes de Contacto</button>
        </div>
        <div class="tab-contenido" id="tab-0">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarDrawer('Juan Pérez', 'Matemáticas', '2023-12-01', 25, 'Masculino', 'juan@example.com', 'Universitario')">
                    <span>Juan Pérez</span>
                </li>
                <li class="lista-item" onclick="mostrarDrawer('María Gómez', 'Física', '2023-11-15', 22, 'Femenino', 'maria@example.com', 'Secundario')">
                    <span>María Gómez</span>
                </li>
            </ul>
        </div>

        <div class="tab-contenido" id="tab-1" style="display: none;">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarDrawer('Lucas Fernández', 'Química', '2023-12-05', 20, 'Masculino', 'lucas@example.com', 'Universitario')">
                    <span>Lucas Fernández</span>
                </li>
            </ul>
        </div>
    </div>

    <div id="drawer" class="drawer">
        <h2 id="nombreAlumno">Nombre del Alumno</h2>
        <p>Materia: <span id="materiaAlumno"></span></p>
        <p>Fecha de Inscripción: <span id="fechaAlumno"></span></p>
        <p>Edad: <span id="edadAlumno"></span></p>
        <p>Sexo: <span id="sexoAlumno"></span></p>
        <p>Email: <span id="emailAlumno"></span></p>
        <p>Nivel de Estudios: <span id="nivelAlumno"></span></p>
        <div class="acciones">
            <button id="btnAccionPrincipal">Aceptar Solicitud</button>
            <button id="btnAccionSecundaria" style="display: none;">Rechazar Solicitud</button>
            <button onclick="cerrarDrawer()">Cerrar</button>
        </div>
    </div>

    <script>
        function mostrarTab(tabIndex) {
            document.querySelectorAll('.tab-contenido').forEach((tab, index) => {
                tab.style.display = index === tabIndex ? 'block' : 'none';
            });
        }

        function mostrarDrawer(nombre, materia, fecha, edad, sexo, email, nivel) {
            document.getElementById('nombreAlumno').innerText = nombre;
            document.getElementById('materiaAlumno').innerText = materia;
            document.getElementById('fechaAlumno').innerText = fecha;
            document.getElementById('edadAlumno').innerText = edad;
            document.getElementById('sexoAlumno').innerText = sexo;
            document.getElementById('emailAlumno').innerText = email;
            document.getElementById('nivelAlumno').innerText = nivel;

            const btnPrincipal = document.getElementById('btnAccionPrincipal');
            btnPrincipal.innerText = 'Aceptar Solicitud';
            btnPrincipal.onclick = () => confirmarAccion(`¿Aceptar la solicitud de ${nombre} para la clase de ${materia}?`);

            document.getElementById('drawer').classList.add('activo');
            document.querySelector('.contenido-principal').classList.add('reducido');
        }

        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
            document.querySelector('.contenido-principal').classList.remove('reducido');
        }

        function confirmarAccion(mensaje) {
            if (confirm(mensaje)) {
                alert('Solicitud aceptada.');
                cerrarDrawer();
            }
        }
    </script>
</body>
</html>
