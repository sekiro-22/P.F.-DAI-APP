<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Docente - ClassMatch</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu-derecha">
        <div class="background-content"></div>

        <h1>ClassMatch</h1>
        <form action="../actions/procesar_registro_docente.php" method="POST">
            <div class="fila">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" placeholder="Ingrese su edad" required>
                <br><br>
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="fila">
                <label for="numero_trabajo">Número de trabajo:</label>
                <input type="number" id="numero_trabajo" name="numero_trabajo" placeholder="Ingrese su número de trabajo" required>
                <br><br>
                <label for="experiencia">Años de experiencia:</label>
                <input type="number" id="experiencia" name="experiencia" placeholder="Ingrese su experiencia" required>
            </div>

            <button type="submit" class="btn-primario">Registrarse</button>
        </form>

        <div class="registro">
            <p><a href="login_elegir.php">Volver</a></p>
        </div>
    </div>
</body>
</html>
