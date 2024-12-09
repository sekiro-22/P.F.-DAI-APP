<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $experiencia = $_POST['experiencia'];
    $telefono = $_POST['telefono'];

    // Simulación de almacenamiento
    session_start();
    $_SESSION['docente'] = [
        'nombre' => $nombre,
        'edad' => $edad,
        'genero' => $genero,
        'experiencia' => $experiencia,
        'telefono' => $telefono
    ];

    // Redirigir a la página de inicio de sesión
    header("Location: ../views/login_iniciar.php");
    exit();
}
?>
