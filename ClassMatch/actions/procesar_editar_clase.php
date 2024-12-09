<?php
session_start();

// Verifica si el usuario es docente
if (!isset($_SESSION['docente'])) {
    header("Location: /ClassMatch/views/login_iniciar.php");
    exit();
}

// Procesa los datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_clase = $_POST['id_clase'];
    $nombre_clase = $_POST['nombre_clase'];
    $horario = $_POST['horario'];

    // Simulación de actualización en base de datos (puedes usar PDO o MySQLi aquí)
    // $db->query("UPDATE clases SET nombre = '$nombre_clase', horario = '$horario' WHERE id = '$id_clase'");

    echo "Clase '$nombre_clase' actualizada exitosamente.";
    // Redirige al docente a la lista de clases
    header("Location: /ClassMatch/views/lista_clases.php");
    exit();
}
?>
