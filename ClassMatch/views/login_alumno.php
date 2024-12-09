<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Alumno - ClassMatch</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu-derecha">
        <div class="background-content"></div>

        <h1>ClassMatch</h1>
        <form action="../actions/procesar_registro_alumno.php" method="POST">
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

                <label for="nivel_educacion">Nivel de educación:</label>
                <select id="nivel_educacion" name="nivel_educacion" required>
                    <option value="primario">Primario</option>
                    <option value="secundario">Secundario</option>
                    <option value="terciario">Terciario</option>
                </select>
                <br><br>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su teléfono" required>
            </div>

            <button type="submit" class="btn-primario">Registrarse</button>
        </form>

        <div class="registro">
            <p><a href="login_elegir.php">Volver</a></p>
        </div>
    </div>
</body>
</html>
