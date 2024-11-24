<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre_usuario']) && isset($_POST['contrasena'])) {
        $nombre_usuario = $_POST['nombre_usuario'];
        $contrasena = $_POST['contrasena'];

        try {
            $stmt = $pdo->prepare("INSERT INTO usuarios (nombre_usuario, contrasena) VALUES (:nombre_usuario, :contrasena)");
            $stmt->bindParam(':nombre_usuario', $nombre_usuario);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->execute();

            header('Location: ../view/login.php?registro=exitoso');
            exit();
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    }
}
?>
