<?php include('barranav_docente.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clases - ClassMatch</title>
    <link rel="stylesheet" href="/ClassMatch/css/docentes.css">
</head>

<body>
    <div class="contenido-principal">
        <h1>Lista de Clases</h1>

        <!-- Tabs para separar Clases Activas y Crear Clase -->
        <div class="tabs">
            <button class="tab" onclick="mostrarTab(0)">Clases Activas</button>
            <button class="tab" onclick="mostrarTab(1)">Crear Clase</button>
        </div>

        <!-- Contenido del Tab 0: Clases Activas -->
        <div class="tab-contenido" id="tab-0">
            <ul class="lista">
                <li class="lista-item" onclick="mostrarDrawer('Matemáticas', 'Juan Pérez', '2023-12-01', '10:00 AM - 12:00 PM', ['Lunes', 'Miércoles'], 'Secundario')">
                    <span>Matemáticas - Juan Pérez</span>
                </li>
                <li class="lista-item" onclick="mostrarDrawer('Física', 'Maria Gómez', '2023-11-15', '02:00 PM - 04:00 PM', ['Martes', 'Jueves'], 'Secundario')">
                    <span>Física - Maria Gómez</span>
                </li>
            </ul>
        </div>

        <!-- Contenido del Tab 1: Crear Clase -->
        <div class="tab-contenido" id="tab-1" style="display: none;">
            <div class="formulario-crear-clase">
                <h2>Crear Nueva Clase</h2>
                <form id="crearClaseForm">
                    <div class="fila">
                        <div class="campo">
                            <label for="materiaClaseInput">Materia:</label>
                            <input type="text" id="materiaClaseInput" name="materia" placeholder="Ingrese la materia" required>
                        </div>
                    </div>
                    <div class="fila solo">
                        <label for="profesorClaseInput">Profesor:</label>
                        <input type="text" id="profesorClaseInput" name="profesor" placeholder="Ingrese el nombre del profesor" required>
                    </div>
                    <div class="fila solo">
                        <label for="fechaClaseInput">Fecha:</label>
                        <input type="text" id="fechaClaseInput" disabled value="Fecha Actual: <span id='fechaActual'></span>">
                    </div>
                    <div class="fila">
                        <div class="campo">
                            <label for="horarioClaseInput">Horario (de tal hora a tal hora):</label>
                            <div class="hora-selector">
                                <input type="time" id="horaInicio" name="horaInicio" required>
                                <input type="time" id="horaFin" name="horaFin" required>
                            </div>
                        </div>
                    </div>
                    <div class="fila solo">
                        <label for="diasClaseInput">Días de la semana:</label>
                        <div id="diasClaseInput" class="dias-selector">
                            <label><input type="checkbox" value="L"> L</label>
                            <label><input type="checkbox" value="M"> M</label>
                            <label><input type="checkbox" value="X"> X</label>
                            <label><input type="checkbox" value="J"> J</label>
                            <label><input type="checkbox" value="V"> V</label>
                            <label><input type="checkbox" value="S"> S</label>
                            <label><input type="checkbox" value="D"> D</label>
                        </div>
                    </div>
                    <div class="fila solo">
                        <label for="precioClaseInput">Precio por clase:</label>
                        <input type="number" id="precioClaseInput" name="precio" placeholder="Ingrese el precio por clase" required>
                    </div>
                    <div class="acciones">
                        <button type="submit" class="btn-primario">Crear Clase</button>
                        <button type="button" class="btn-secundario" onclick="cerrarFormulario()">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="drawer" class="drawer">
        <h2 id="nombreClase">Materia de la Clase</h2>
        <p>Profesor: <span id="profesorClase"></span></p>
        <p>Fecha: <span id="fechaClase"></span></p>
        <p>Horario: <span id="horarioClase"></span></p>
        <p>Días: <span id="diasClase"></span></p>
        <p>Grupo: <span id="nivelClase"></span></p>
        <div class="acciones">
            <button id="btnAccionPrincipal">Cancelar Clase</button>
            <button id="btnAccionSecundaria" style="display: none;">Rechazar</button>
            <button onclick="cerrarDrawer()">Cerrar</button>
            <!-- Botón de Editar -->
            <button onclick="abrirFormularioEditar()">Editar Clase</button>
        </div>
    </div>

    <script>
        document.getElementById('fechaActual').innerText = new Date().toLocaleDateString();

        function mostrarTab(tabIndex) {
            document.querySelectorAll('.tab-contenido').forEach((tab, index) => {
                tab.style.display = index === tabIndex ? 'block' : 'none';
            });
        }

        // Función para mostrar los detalles de la clase y permitir la edición
        function mostrarDrawer(materia, profesor, fecha, horario, dias, grupo) {
            document.getElementById('nombreClase').innerText = materia;
            document.getElementById('profesorClase').innerText = profesor;
            document.getElementById('fechaClase').innerText = fecha;
            document.getElementById('horarioClase').innerText = horario;
            document.getElementById('diasClase').innerText = dias.join(', ');
            document.getElementById('nivelClase').innerText = grupo;

            const btnPrincipal = document.getElementById('btnAccionPrincipal');
            btnPrincipal.innerText = 'Cancelar Clase';
            btnPrincipal.onclick = () => confirmarAccion(`¿Cancelar la clase de ${materia} con ${profesor}?`);

            document.getElementById('drawer').classList.add('activo');
            document.querySelector('.contenido-principal').classList.add('reducido');
        }

        // Función para abrir el formulario de edición con los valores prellenados
        function abrirFormularioEditar() {
            // Llenar el formulario con los datos de la clase editada
            document.getElementById('materiaClaseInput').value = document.getElementById('nombreClase').innerText;
            document.getElementById('profesorClaseInput').value = document.getElementById('profesorClase').innerText;
            document.getElementById('fechaClaseInput').value = document.getElementById('fechaClase').innerText;
            // Aquí se debe completar con los valores de horario y días si se desea pre-llenar
            document.getElementById('formularioCrearClase').classList.add('activo');
            document.querySelector('.contenido-principal').classList.add('reducido');
        }

        function cerrarFormulario() {
            document.getElementById('formularioCrearClase').classList.remove('activo');
            document.querySelector('.contenido-principal').classList.remove('reducido');
        }

        function cerrarDrawer() {
            document.getElementById('drawer').classList.remove('activo');
            document.querySelector('.contenido-principal').classList.remove('reducido');
        }

        function confirmarAccion(mensaje) {
            if (confirm(mensaje)) {
                alert('Acción realizada con éxito.');
                cerrarDrawer();
            }
        }

        // Función para crear la clase (se puede completar con lógica de backend)
        document.getElementById('crearClaseForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const materia = document.getElementById('materiaClaseInput').value;
            const profesor = document.getElementById('profesorClaseInput').value;
            const horario = `${document.getElementById('horaInicio').value} - ${document.getElementById('horaFin').value}`;
            const dias = Array.from(document.querySelectorAll('#diasClaseInput input:checked')).map(checkbox => checkbox.value);
            const precio = document.getElementById('precioClaseInput').value;

            alert(`Clase creada: ${materia} - ${profesor} - Días: ${dias.join(', ')} - Horario: ${horario} - Precio: $${precio}`);
            cerrarFormulario();
        });
    </script>
</body>

</html>
