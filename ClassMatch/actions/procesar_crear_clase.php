<?php
session_start();

// Verifica si el usuario es docente
if (!isset($_SESSION['docente'])) {
    header("Location: /ClassMatch/views/login_iniciar.php");
    exit();
}

// Procesa los datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_clase = $_POST['nombre_clase'];
    $horario = $_POST['horario'];

    // Simulación de inserción en base de datos (puedes usar PDO o MySQLi aquí)
    // $db->query("INSERT INTO clases (nombre, horario) VALUES ('$nombre_clase', '$horario')");

    echo "Clase '$nombre_clase' creada exitosamente.";
    // Redirige al docente a la lista de clases
    header("Location: /ClassMatch/views/lista_clases.php");
    exit();
}
?>
