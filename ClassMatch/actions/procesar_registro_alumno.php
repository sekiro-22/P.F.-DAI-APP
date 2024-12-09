<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $nivel_educacion = $_POST['nivel_educacion'];

    // Simulación de almacenamiento
    session_start();
    $_SESSION['alumno'] = [
        'nombre' => $nombre,
        'edad' => $edad,
        'genero' => $genero,
        'nivel_educacion' => $nivel_educacion
    ];

    // Redirigir a la página de inicio de sesión
    header("Location: ../views/login_iniciar.php");
    exit();
}
?>
