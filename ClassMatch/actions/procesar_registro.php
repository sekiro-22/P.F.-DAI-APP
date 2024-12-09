<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validación de contraseñas
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    // Simulación de almacenamiento
    session_start();
    $_SESSION['usuario'] = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'correo' => $correo
    ];

    // Redirigir a la elección del tipo de cuenta
    header("Location: ../views/login_elegir.php");
    exit();
}
?>
